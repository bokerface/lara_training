@extends('layouts.master')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>
        <div class="table-data__tool">

            <div class="table-data__tool-right">
                <a href={{ url('/table/create') }}
                    class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>
                    add item
                </a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                @foreach ($users as $user)
                    {{ $user->name }}<br>
                @endforeach
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@endsection

@section('script')
<script>
    $('#table').addClass('active');

</script>
@endsection
