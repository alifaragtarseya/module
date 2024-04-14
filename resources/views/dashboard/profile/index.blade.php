@extends('dashboard.layouts.master')

@section('title')
    {{ __('lang.profile') }}
@endsection

@section('content')

    @include('dashboard.layouts.includes.breadcrumb' , ['title' => __('lang.profile')])

    <div class="row pt-2">
        <div class="col-md-4">
           @component('dashboard.layouts.includes.card' )

               @slot('content')
                <div class="text-center">
                    <img src="{{ asset($resource->image) }}" width="200" height="200" class="rounded-circle m-auto" alt="">

                </div>
               <br>
                 <b>{{ __('lang.username') }} : </b> {{ $resource->username }}
                 <br><br>
                 <b>{{ __('lang.email') }} : </b> {{ $resource->email }}
               @endslot
           @endcomponent
        </div>
        <div class="col-md-8">
           @component('dashboard.layouts.includes.card' )

               @slot('content')
                    <form action="{{route('admin.updateProfile')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::label('image', __('lang.image'), ['class' =>'form-label']) !!}
                                    {!! Form::file('image', ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('username', __('lang.username'), ['class' =>'form-label']) !!}
                                    {!! Form::text('username', $resource->username, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('phone', __('lang.phone'), ['class' =>'form-label']) !!}
                                    {!! Form::text('phone', $resource->phone, ['class' => 'form-control']) !!}
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::label('email', __('lang.email'), ['class' =>'form-label']) !!}
                                    {!! Form::email('email', $resource->email, ['class' => 'form-control']) !!}
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::label('password', __('lang.password'), ['class' =>'form-label']) !!}
                                    {!! Form::password('password', ['class' => 'form-control' ,'autocomplete' => 'new-password']) !!}
                                </div>
                            </div>


                            <div class="col-md-12 pt-3 text-center">
                               <button type="submit" class="btn btn-primary">{{ __('lang.update') }}</button>
                            </div>

                        </div>
                    </form>
               @endslot
           @endcomponent
        </div>
    </div>
@endsection
