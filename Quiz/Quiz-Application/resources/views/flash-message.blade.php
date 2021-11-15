<style>
    .close {
        float: right;
        background-color: transparent;
        border: none;
        font-size: 20px;
    }
</style>
<!-- when a process is completed successfully -->
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button class="close" type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<!-- when a process returns error -->
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button class="close" type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<!-- when a process returns warning -->
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button class="close" type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
