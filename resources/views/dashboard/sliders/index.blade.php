@extends('dashboard.layouts.master')

@php
    $title = __('lang.sliders');
@endphp

@section('title')
    {{ $title }}
@endsection


@section('content')

    @include('dashboard.layouts.includes.breadcrumb' , ['title' => $title])

    <div class="row pt-2">
        <div class="col-md-12">
           @component('dashboard.layouts.includes.card' )
               @slot('tool')
                   <a href="{{ route('admin.slider.create') }}"   class="btn btn-primary d-grid float-end mb-2 ">
                    <i class="  bx bx-plus"> {{ __('lang.add') . ' ' . __('lang.slider') }}</i>

                </a>
               @endslot

               @slot('content')
                   @component('dashboard.layouts.includes.table')
                       @slot('headers')
                            <td>#</td>
                           <td>{{ __('lang.image') }}</td>
                           <td>{{ __('lang.status') }}</td>
                           <td>{{ __('lang.actions') }}</td>
                       @endslot

                       @slot('data')
                           @if (isset($data))
                               @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" class="border-8" width="100px" height="40px" alt="">
                                        </td>
                                        <td>
                                            <a class="form-check form-switch d-flex m-1 justify-content-between text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('lang.change_status') }}" >
                                                <input class="form-check-input"   type="checkbox" role="switch" id="flexSwitchCheckChecked-{{ $item->id }}" onclick="changeStatus(this,{{ $item->id }})" {{ $item->status == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexSwitchCheckChecked-{{ $item->id }}"></label>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.slider.edit',$item->id) }}"   class="btn  btn-primary btn-sm"><i class="bx bx-edit"></i></a>
                                            <a href="{{ route('admin.slider.delete',$item->id) }}" class="btn btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
                                        </td>
                                   </tr>
                               @endforeach
                           @else
                               <tr>
                                   <td colspan="4">
                                       <div class="text-center alert alert-warring">
                                           {{ __('lang.no_data_found') }}
                                       </div>
                                   </td>
                               </tr>
                           @endif
                       @endslot
                   @endcomponent
               @endslot
           @endcomponent
        </div>
    </div>

    <div class="modal fade table-modal" id="table-model" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
</div>
@endsection
@section('js')

<script>
    function changeStatus(el , id){
        var status = 0 ;
        if(el.checked){
            status = 1 ;
        }
        $.ajax({
            url: "{{ route('admin.slider.change-status') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: id,
                status: status
            },
            success: function (results) {
               if (results.success) {
                    swal.fire("", results.message, "success");
               } else {
                    swal.fire("", results.message, "error");
               }
            },
            error: function (xhr) {
                var err = JSON.parse(xhr.responseText);
                swal.fire("", err.message, "error");
            }
        });
    }
</script>
@endsection
