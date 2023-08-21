@extends('base')
@section('content')
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">

            <!--begin::Col-->
            <div class="col-xxl-4" data-select2-id="select2-data-150-esvr">

                <!--begin::Forms widget 1-->
                <div class="card h-xl-100" data-select2-id="select2-data-149-zv0w">
                    <!--begin::Header-->
                    <div class="card-header position-relative min-h-50px p-0 border-bottom-2">

                        <!--begin::Nav-->
                        <ul class="nav nav-pills nav-pills-custom d-flex position-relative w-100" role="tablist">
                            <!--begin::Item-->
                            <li class="nav-item mx-0 p-0 w-50" role="presentation">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-color-muted border-0 h-100 px-0 active" data-bs-toggle="pill"
                                    id="kt_forms_widget_1_tab_1" href="#kt_forms_widget_1_tab_content_1"
                                    aria-selected="true" role="tab">
                                    <!--begin::Subtitle-->
                                    <span class="nav-text fw-bold fs-4 mb-3">
                                        Send
                                    </span>
                                    <!--end::Subtitle-->

                                    <!--begin::Bullet-->
                                    <span
                                        class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Nav-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body" data-select2-id="select2-data-148-zcyk">
                        <!--begin::Tab Content-->
                        <div class="tab-content" data-select2-id="select2-data-147-53cq">
                            <form action="{{route('paypal')}}" method="post" id="myform">
                                @csrf
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade active show" id="kt_forms_widget_1_tab_content_1" role="tabpanel"
                                    aria-labelledby="kt_forms_widget_1_tab_1"
                                    data-select2-id="select2-data-kt_forms_widget_1_tab_content_1">
                                    <!--begin::Input group-->
                                    <div class="form-floating border border-gray-300 rounded mb-7">
                                        <span
                                            class="select2 select2-container select2-container--bootstrap5 select2-container--below"
                                            dir="ltr" data-select2-id="select2-data-142-2shd" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-transparent"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-disabled="false"
                                                    aria-labelledby="select2-kt_forms_widget_1_select_1-container"
                                                    aria-controls="select2-kt_forms_widget_1_select_1-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-kt_forms_widget_1_select_1-container" role="textbox"
                                                        aria-readonly="true" title="Paypal"><span><img
                                                            src="{{asset('assets/media/svg/payment-methods/paypal.svg')}}"
                                                                class="h-35px me-2"
                                                                alt="image"></span></span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                 aria-hidden="true"></span></span>
                                        <label for="floatingInputValue"></label>
                                    </div>
                                    <!--end::Input group-->
    
                                    <!--begin::Row-->
                                    <div class="row mb-7">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Input group-->
                                            <div class="form-floating">
                                                <input type="text" class="form-control text-gray-800 fw-bold"
                                                    placeholder="00.0" id="floatingInputValue" name="amount" value="230.00">
                                                <label for="floatingInputValue">Amount(EUR)</label>
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Col-->
    
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Input group-->
                                            <div class="form-floating">
                                                <input type="email" class="form-control text-gray-800 fw-bold"
                                                    placeholder="00.0" id="floatingInputValue" value="$0,00000032">
                                                <label for="floatingInputValue">Amount(FCFA)</label>
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Tap pane-->

                            </form>
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Forms widget 1-->
            </div>
            <!--end::Col-->
            <div class="col-xxl-4">
                <!--begin::Action-->
                <div class="d-flex  w-50" style="margin:0 auto; margin-top:90px ">
                    <a onclick="formSubmit()" href="" data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet"
                    class="btn btn-primary fs-3 w-100">Make Payment</a>
                </div>
                <!--end::Action-->
            </div>
            <!--begin::Col-->
            <div class="col-xxl-4"  data-select2-id="select2-data-150-esvr">

                <!--begin::Forms widget 1-->
                <div class="card h-xl-100" data-select2-id="select2-data-149-zv0w">
                    <!--begin::Header-->
                    <div class="card-header position-relative min-h-50px p-0 border-bottom-2">
                        <!--begin::Nav-->
                        <ul class="nav nav-pills nav-pills-custom d-flex position-relative w-100" role="tablist">
                            <!--begin::Item-->
                            <li class="nav-item mx-0 p-0 w-50" role="presentation">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-color-muted border-0 h-100 px-0 active" data-bs-toggle="pill"
                                    id="kt_forms_widget_1_tab_1" href="#kt_forms_widget_1_tab_content_1"
                                    aria-selected="true" role="tab">
                                    <!--begin::Subtitle-->
                                    <span class="nav-text fw-bold fs-4 mb-3">
                                        Receive
                                    </span>
                                    <!--end::Subtitle-->

                                    <!--begin::Bullet-->
                                    <span
                                        class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Nav-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body" data-select2-id="select2-data-148-zcyk">
                        <!--begin::Tab Content-->
                        <div class="tab-content" data-select2-id="select2-data-147-53cq">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade active show" id="kt_forms_widget_1_tab_content_1" role="tabpanel"
                                aria-labelledby="kt_forms_widget_1_tab_1"
                                data-select2-id="select2-data-kt_forms_widget_1_tab_content_1">
                                <!--begin::Input group-->
                                <div class="form-floating border border-gray-300 rounded mb-7">
                                    <span
                                        class="select2 select2-container select2-container--bootstrap5 select2-container--below"
                                        dir="ltr" data-select2-id="select2-data-142-2shd" style="width: 100%;"><span
                                            class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-transparent"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-kt_forms_widget_1_select_1-container"
                                                aria-controls="select2-kt_forms_widget_1_select_1-container"><span
                                                    class="select2-selection__rendered"
                                                    id="select2-kt_forms_widget_1_select_1-container" role="textbox"
                                                    aria-readonly="true" title="Mtn momo"><span><img
                                                            src="{{asset('assets/media/svg/payment-methods/mtn.png')}}"
                                                            class=" h-35px me-2"
                                                            alt="image">MTN Momo</span></span><span
                                                    class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <label for="floatingInputValue"></label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Row-->
                                <div class="row mb-7">
                                    
                                    <div class="col-12">
                                        <!--begin::Input group-->
                                        <div class="form-floating">
                                            <input type="email" class="form-control text-gray-800 fw-bold"
                                                placeholder="+229 00 00 00 00" id="floatingInputValue">
                                            <label for="floatingInputValue">Phone</label>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Row-->

                                
                            </div>
                            <!--end::Tap pane-->

                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Forms widget 1-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->


    </div>
    

    <script>
        function formSubmit() {
            document.getElementById("myform").submit(); // Soumet le formulaire 
        }
    </script>
@endsection
