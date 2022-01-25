{{-- code buat mempermudah mengedit dengan cara menginclude  --}}
@extends('layout.app')

@section('title', 'Home')


@section('content')

@section('style')

    <style>
        body{


        }
    </style>

@endsection

    @component('components.alert')

        @slot('title')

            Header Component With <strong>Strong</strong> tag bang

        @endslot

        ini adalah clidren <strong>bang</strong>

        @slot('footer')

            footer <strong style="color: blue">Bang</strong>

        @endslot

    @endcomponent
This is Home page <strong style="color: red">Bang</strong>
<h1>okoklh</h1>

@endsection


