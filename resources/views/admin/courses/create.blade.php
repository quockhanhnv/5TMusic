@extends('admin.layouts.layout')

@section('content')
<div class="m-portlet">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                </span>
                <h3 class="m-portlet__head-text">
                    Tạo mới khóa học
                </h3>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
        <div class="m-portlet__body">
            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    <label>
                        Tên khóa học:
                    </label>
                    <input type="text" name="" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('c_name')}}</span>
                    @endif
                </div>
                <div class="col-lg-4">
                    <label class="">
                        Email:
                    </label>
                    <input type="email" class="form-control m-input" placeholder="Enter email">
                    <span class="m-form__help">
                        Please enter your email
                    </span>
                </div>
                <div class="col-lg-4">
                    <label>
                        Username:
                    </label>
                    <div class="input-group m-input-group m-input-group--square">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="la la-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control m-input" placeholder="">
                    </div>
                    <span class="m-form__help">
                        Please enter your username
                    </span>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    <label class="">
                        Contact:
                    </label>
                    <input type="email" class="form-control m-input" placeholder="Enter contact number">
                    <span class="m-form__help">
                        Please enter your contact
                    </span>
                </div>
                <div class="col-lg-4">
                    <label class="">
                        Fax:
                    </label>
                    <div class="m-input-icon m-input-icon--right">
                        <input type="text" class="form-control m-input" placeholder="Fax number">
                        <span class="m-input-icon__icon m-input-icon__icon--right">
                            <span>
                                <i class="la la-info-circle"></i>
                            </span>
                        </span>
                    </div>
                    <span class="m-form__help">
                        Please enter fax
                    </span>
                </div>
                <div class="col-lg-4">
                    <label>
                        Address:
                    </label>
                    <div class="m-input-icon m-input-icon--right">
                        <input type="text" class="form-control m-input" placeholder="Enter your address">
                        <span class="m-input-icon__icon m-input-icon__icon--right">
                            <span>
                                <i class="la la-map-marker"></i>
                            </span>
                        </span>
                    </div>
                    <span class="m-form__help">
                        Please enter your address
                    </span>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    <label class="">
                        Postcode:
                    </label>
                    <div class="m-input-icon m-input-icon--right">
                        <input type="text" class="form-control m-input" placeholder="Enter your postcode">
                        <span class="m-input-icon__icon m-input-icon__icon--right">
                            <span>
                                <i class="la la-bookmark-o"></i>
                            </span>
                        </span>
                    </div>
                    <span class="m-form__help">
                        Please enter your postcode
                    </span>
                </div>
                <div class="col-lg-4">
                    <label class="">
                        User Group:
                    </label>
                    <div class="m-radio-inline">
                        <label class="m-radio m-radio--solid">
                            <input type="radio" name="example_2" checked="" value="2">
                            Sales Person
                            <span></span>
                        </label>
                        <label class="m-radio m-radio--solid">
                            <input type="radio" name="example_2" value="2">
                            Customer
                            <span></span>
                        </label>
                    </div>
                    <span class="m-form__help">
                        Please select user group
                    </span>
                </div>
            </div>
        </div>
        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
            <div class="m-form__actions m-form__actions--solid">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <button type="reset" class="btn btn-primary">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection

