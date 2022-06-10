@extends('layouts.master3')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">

    
    @if (Session::get('locale')== "ar")
	        	<style>
					.prod{
						direction:rtl;
					}
			
				</style>  
		@else
	        	<style>
                    	.prod{
						direction:ltr;
                        text-align:left;
					}
                   
				
					
				</style>
		@endif
@endsection
@section('title')
    
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between prod row">
        <a href="{{url()->previous()}}">
            <button class="btn btn-primary btn-sm">
                @lang('lang.Return To Customer Page')
            </button>
        </a>
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">@lang('lang.Customer')</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    @lang('lang.edit this product')</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row prod">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('customer.update',$customer->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @method('PUT')
                        @csrf
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="customer_organization_name" class="control-label">@lang('lang.Customer Organization Name')</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <input value="{{$customer->customer_organization_name}}" type="text" name="customer_organization_name" class="form-control" placeholder="ORG Name">
                            </div>
                            
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="customer_brand_name" class="control-label">Customer Brand Name</label>
                                <input value="{{$customer->customer_brand_name}}" type="text" name="customer_brand_name" class="form-control" placeholder="Brand Name">                                
                            </div>
                        </div> <br>
                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
                                <label for="customer_contact_name" class="control-label">Customer Contact Name</label>
                                <input value="{{$customer->customer_contact_name}}" type="text" name="customer_contact_name" class="form-control" placeholder="Contact Name">
                            </div>
                            
                        </div> <br>
                        <div class="row">
                            <div class="col">
                                <label for="customer_contact_whatsaap" class="control-label">Customer Contact whatsapp</label>
                                <input id="customer_contact_whatsaap" value="{{$customer->customer_contact_whatsaap}}" type="text" name="customer_contact_whatsaap" class="form-control" placeholder="Contact Name">
                                <label for="cwhatsapp" class="control-label">@lang('lang.Customer Contact Whatsapp Link')</label>
                            </div>
                        </div> <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" readonly id="cwhatsaap" class="form-control" placeholder="Whatsapp Link">
                                    </div>
                                </div> <br>
                                <div class="row">
                                    <div class="col">
                                        <a id="cwhatsaapLink" href="" target="_blank">
                                            <i class="btn btn-primary"><i class="las la-link"></i></i>
                                        </a>
                                    </div>
                                </div> <br>
                            
                            <div class="row">
                            <div class="col">
                                <label for="customer_contact_number" class="control-label">Customer Contact number</label>
                                <input value="{{$customer->customer_contact_number}}" type="text" name="customer_contact_number" class="form-control" placeholder="Contact Name">
                            </div>
                            
                            
                            
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="customer_contact_number2" class="control-label">Customer Contact number2</label>
                                <input value="{{$customer->customer_contact_number2}}" type="text" name="customer_contact_number2" class="form-control" placeholder="Contact Name">
                            </div>
                        </div> <br>
                        {{-- 3 --}}
                        <div class="row">
                            <div class="col">
                                <label for="email" class="control-label">Email</label>
                                <input value="{{$customer->email}}" type="email" name="email" class="form-control" placeholder="Account">
                            </div>
                                                                                                                
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="website" class="control-label">website</label>
                                <input value="{{$customer->website}}" type="text" name="website" class="form-control" placeholder="Account">
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="col">
                                <label for="social_media_accounts" class="control-label">social media accounts</label>
                                <input value="{{$customer->social_media_accounts}}" type="text" name="social_media_accounts" class="form-control" placeholder="Account">
                            </div>
                        </div> <br>

                        <div class="row">
                            <div class="col">
                                <label for="vat_number" class="control-label">VAT Number</label>
                                <input value="{{$customer->vat_number}}" type="text" name="vat_number" class="form-control" placeholder=VAT">
                            </div>
                        </div> <br>
                        

                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
                                <label for="coutnry" class="control-label">Country</label>
                                <input value="{{$customer->country}}" type="text" name="country" class="form-control" placeholder=Country">
                            </div>
                            <div class="col">
                                <label for="city" class="control-label">city</label>
                                <input value="{{$customer->city}}" type="text" name="city" class="form-control" placeholder=Country">
                            </div>
                            <div class="col">
                                <label for="district" class="control-label">District</label>
                                <input value="{{$customer->district}}" type="text" name="district" class="form-control" placeholder="District">
                            </div>
                        </div>
                        <br>
                        {{-- 5 --}}
                        <div class="row">
                            <div class="col">
                                <label for="street" class="control-label">Street</label>
                                <input value="{{$customer->street}}" type="text" name="street" class="form-control" placeholder="street">
                            </div>
                            <div class="col">
                                <label for="building_number" class="control-label">Building Number</label>
                                <input value="{{$customer->building_number}}" type="text" name="building_number" class="form-control" placeholder="Building Number">
                            </div>
                        </div>
                        <br>
                        {{-- 6 --}}
                        <div class="row">
                            <div class="col">
                                <label for="secondary_number" class="control-label">Secondary Number</label>
                                <input value="{{$customer->secondary_number}}" type="text" name="secondary_number" class="form-control" placeholder="Secondary Number">
                            </div>
                            <div class="col">
                                <label for="postal_code" class="control-label">Postal Code</label>
                                <input value="{{$customer->postal_code}}" type="text" name="postal_code" class="form-control" placeholder="Postal Code">
                            </div>
                        </div>
                        <br>
                        {{-- 7 --}}
                        <div class="row">
                            <div class="col">
                                <label for="customer_attatchment_CR" class="control-label">Customer Attatchment C.R</label>
                                <input value="{{$customer->customer_attatchment_CR}}" type="text" name="customer_attatchment_CR" class="form-control" >
                            </div>
                            <div class="col">
                                <label for="customer_VAT_certificate" class="control-label">Customer VAT Certificate Link</label>
                                <input value="{{$customer->customer_VAT_certificate}}" type="text" name="customer_VAT_certificate" class="form-control" placeholder="Link">
                            </div>
                        </div>
                        <br>
                        {{-- 8 --}}
                        <div class="row">
                            <div class="col">
                                <label for="customer_brand_book" class="control-label">Customer Brand Book</label>
                                <input id="customer_brand_book" value="{{$customer->customer_brand_book}}" type="text" name="customer_brand_book" class="form-control" placeholder="Brand Book Link">
                                <label for="brand" class="control-label">@lang('lang.Customer Brand Book Link')</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" readonly id="brand" class="form-control" placeholder="Brand Book Link">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a id="brandLink" href="" target="_blank">
                                            <i class="btn btn-primary"><i class="las la-link"></i></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="customer_product_designs" class="control-label">Customer Product Designs</label>
                                <input id="customer_product_designs" value="{{$customer->customer_product_designs}}" type="text" name="customer_product_designs" class="form-control" placeholder="Link">
                                <label for="design" class="control-label">Customer Product Designs</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" readonly id="design" class="form-control" placeholder="Brand Book Link">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a id="designLink" href="" target="_blank">
                                            <i class="btn btn-primary"><i class="las la-link"></i></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        {{-- 9 --}}
                        <div class="row">
                            <div class="col">
                                <label for="customer_current_products" class="control-label">Customer current Product</label>
                                <input id="customer_current_products" value="{{$customer->customer_current_products}}" type="text" name="customer_current_products" class="form-control" placeholder="Link">
                                <label for="current" class="control-label">Customer Current Product Link</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" readonly id="current" class="form-control" placeholder="Customer Current Produt Link">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a id="currentLink" href="" target="_blank">
                                            <i class="btn btn-primary"><i class="las la-link"></i></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="color_codes_pantone" class="control-label">Customer Codes antone / CMYK</label>
                                <input value="{{$customer->color_codes_pantone}}" type="text" name="color_codes_pantone" class="form-control" placeholder="Link">
                            </div>
                        </div>
                        <br>
                        {{-- 10 --}}
                        <div class="row">
                            <div class="col">
                                <label for="user_Comments" class="control-label">Customer Comments</label>
                                <textarea value="{{$customer->user_Comments}}" class="form-control" id="exampleTextarea" name="user_Comments" rows="3"></textarea>
                            </div>
                            <div class="col">
                                <label for="status" class="control-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Suspect">Suspect</option>
                                    <option value="Prospect">Prospect</option>
                                    <option value="Customer">Customer</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 11 --}}
                        <div class="row">
                            <div class="col">
                                <label for="customer_IBAN" class="control-label">Customer IBAN</label>
                                <input value="{{$customer->customer_IBAN}}" type="text" name="customer_IBAN" class="form-control" placeholder="IBAN">
                            </div>
                            <div class="col">
                                <label for="delivery_location" class="control-label">Delivery Location</label>
                                <input id="delivery_location" value="{{$customer->delivery_location}}" type="text" name="delivery_location" class="form-control" placeholder="Link">
                                <label for="delivery" class="control-label">Delivery Location Link</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" readonly id="delivery" class="form-control" placeholder="Delivery Location Link">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a id="currentLink" href="" target="_blank">
                                            <i class="btn btn-primary"><i class="las la-link"></i></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <br>

                        <div class="d-flex justify-content-center">
                            <button type="text" class="btn btn-primary">Update</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection