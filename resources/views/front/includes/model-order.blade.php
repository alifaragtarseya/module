<div class="modal fade" id="exampleModal" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-center border-0">
          <div class="header text-center">
            <h3 class="modal-title" id="exampleModalLabel"><b>{{__('lang.contact_us')}}</b></h3>
            <h3 class="modal-title" id="exampleModalLabel"><b>{{__('lang.request_product_with')}} <span class="main-color">{{ __('lang.site_name') }}</span></b></h3>

          </div>
          {{-- <button type="button" class="close {{ isRtl()?'ml-0':'' }}" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> --}}
        </div>
        <div class="modal-body border-0">
            <form action="">
                @csrf
                <div class="row text-{{ isRtl()?'end':"start" }}">
                    <div class="col-md-12 pt-3">
                        <label for="name">{{ __('lang.username') }}</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="col-md-12 pt-3">
                        <label for="address">{{ __('lang.address') }}</label>

                        <input type="text" name="address" id="address" class="form-control" required>
                    </div>
                    <div class="col-md-12 pt-3">
                        <label for="phone">{{ __('lang.phone') }}</label>

                        <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>

                    <div class="col-md-12 pt-3">
                        <label for="notes">{{ __('lang.notes') }}</label>

                        <textarea name="notes" required class="form-control" id="notes" cols="20" rows="5"></textarea>
                    </div>

                    <div class="col-md-12 pt-5">
                        <div class="contact-btn">
                            <button type="button"  onclick="sendOrder('{{ $product }}')" class="btn w3-block btn--primary d-flex align-items-center justify-content-center p-3 text-white" style="gap: 10px">
                                <b>{{ __('lang.send_order') }}</b>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33" fill="none">
                                    <g clip-path="url(#clip0_249_4609)">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0003 3.16669C8.63633 3.16669 2.66699 9.13602 2.66699 16.5C2.66699 19.02 3.36699 21.38 4.58433 23.3907L3.39499 27.4334C3.3267 27.6655 3.32221 27.9117 3.38198 28.1461C3.44176 28.3806 3.56359 28.5946 3.73467 28.7657C3.90575 28.9368 4.11977 29.0586 4.35421 29.1184C4.58866 29.1781 4.83488 29.1736 5.06699 29.1054L9.10966 27.916C11.1879 29.1735 13.5713 29.8367 16.0003 29.8334C23.3643 29.8334 29.3337 23.864 29.3337 16.5C29.3337 9.13602 23.3643 3.16669 16.0003 3.16669ZM12.9843 19.5174C15.6817 22.2134 18.2563 22.5694 19.1657 22.6027C20.5483 22.6534 21.895 21.5974 22.419 20.372C22.4851 20.2196 22.5092 20.0522 22.4885 19.8873C22.4679 19.7224 22.4033 19.5661 22.3017 19.4347C21.571 18.5014 20.583 17.8307 19.6177 17.164C19.4161 17.0247 19.1684 16.9688 18.9266 17.008C18.6847 17.0473 18.4674 17.1787 18.3203 17.3747L17.5203 18.5947C17.4783 18.6603 17.4127 18.7073 17.3371 18.7261C17.2615 18.745 17.1816 18.7342 17.1137 18.696C16.571 18.3854 15.7803 17.8574 15.2123 17.2894C14.6443 16.7214 14.1483 15.9667 13.8697 15.4587C13.8351 15.3941 13.8251 15.3193 13.8415 15.2479C13.858 15.1766 13.8997 15.1136 13.959 15.0707L15.191 14.156C15.3668 14.0031 15.4803 13.791 15.5098 13.5598C15.5393 13.3287 15.4828 13.0948 15.351 12.9027C14.7537 12.028 14.0577 10.916 13.0483 10.1787C12.9181 10.0843 12.7655 10.0254 12.6056 10.0079C12.4457 9.99037 12.2839 10.0148 12.1363 10.0787C10.9097 10.604 9.84832 11.9507 9.89899 13.336C9.93232 14.2454 10.2883 16.82 12.9843 19.5174Z" fill="white"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_249_4609">
                                        <rect width="32" height="32" fill="white" transform="translate(0 0.5)"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                                </button>
                        </div>
                    </div>


                </div>
            </form>
        </div>

      </div>
    </div>
  </div>
