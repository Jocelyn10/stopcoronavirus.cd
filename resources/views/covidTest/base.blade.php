@extends('layout.app')
@section('title', 'Directives prises par le Gouvernement')
@section('content')
<div class="container-fluid jumbotron-title mb-4 p-5">
    <div class="row stepper justify-content-center">
        <div class="col-12 col-md-2 mb-4 mb-md-0">
            <div class="step d-flex justify-content-center ">
                <div class="step-circle {{!$isResultat?'active':''}} ">
                    <p>1</p>
                </div>
                <p class="step-title">Questionnaire</p>
            </div>
        </div>
        <div class="col-12 col-md-2">
            <div class="step d-flex justify-content-center">
                <div class="step-circle {{$isResultat?'active':''}}">
                    <p>2</p>
                </div>
                <p class="step-title">Résultats</p>
            </div>

        </div>
    </div>
</div>
@yield('covid_content')
@endsection
