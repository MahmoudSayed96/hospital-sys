@extends('admin.layouts.master')

@section('title','Doctors')

@php
$model = 'doctors';
@endphp

@section('content')

@component('admin.shared.breadcrumb',[
'title' => 'Doctors',
'icon' => 'fas fa-user-md',
'description' => 'List of doctors in hospital.',
'active_action' => 'Doctors',
])
@endcomponent


{{-- Butttons --}}
@component('admin.shared.buttons.header_btns',[
'add_btn_text'=>'Add Doctor',
'add_btn_route' => admin_route($model . '.create')
])
@slot('header_btns')
<a href="{{admin_route($model . '.gallery')}}" class="text-dark" data-toggle="tooltip" data-placement="top"
    title="gallery">
    <i class="fas fa-border-all fa-2x mr-3"></i>
</a>
<a href="{{admin_route($model . '.index')}}" class="text-dark" data-toggle="tooltip" data-placement="top" title="list">
    <i class="fas fa-list-alt fa-2x"></i>
</a>
@endslot
@endcomponent

{{-- Messages --}}
@include('admin.shared._errors')
{{-- Messages --}}
@include('admin.shared._messages')

<div class="gallery">
    <div class="gallery__list">

    </div>
    <div class="mt-5 text-center d-none ajax-loading">
        <img src="{{asset('uploads/images/ajax-load.gif')}}" width="50" height="50" alt="loading">
    </div>
</div>
{{-- Delete Modal --}}
@include('admin.shared._delete_modal')
@endsection

@push('scripts')
<script>
    var page = 2;
        const SITE_URL = "{{url('/')}}";
        loadMore(page);
        $(window).scroll(function() { //detect page scroll
            if($(window).scrollTop() + $(window).height() >= $(document).height()) { //if user scrolled from top to bottom of the page
                page++; //page number increment
                loadMore(page); //load content   
            }
        }); 
        function loadMore(page) {
            console.log(page);
            $.ajax({
                url:'gallery?pages=2',
                method:'GET',
                dataType:'json',
                beforeSend: function(){
                    $('.ajax-loading').show();
                }
            }).done(function(response){
                console.log(response);
                if(response.html == '') {
                    // hide load more
                    return false;
                }
                $('.ajax-loading').hide();
                $('.gallery__list').append(response.html);
            }).fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('No response from server');
            });
        }
</script>
@endpush