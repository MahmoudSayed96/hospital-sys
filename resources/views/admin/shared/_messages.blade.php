@if (session()->has('message'))
<div class="alert alert-{{session()->get("messageType") == "error" ? "danger" : "success"}}">
    <strong>{{session()->get('message')}}</strong>
</div>
@endif