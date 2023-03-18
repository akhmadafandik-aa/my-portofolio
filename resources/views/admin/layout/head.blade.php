<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('assets/admin/assets/img/logo_wj.ico')}}">
  <link rel="icon" type="image/png" href="{{url('assets/admin/assets/img/logo_wj.ico')}}">
  <title>
    Admin || Portofolio
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{url('assets/admin/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{url('assets/admin/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{url('assets/admin/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{url('assets/admin/assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
  {{-- Font Poppins --}}
  <link href="{{ url('assets/admin/assets/fonts/font_poppins.css') }}" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
  <link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css" />
  <link href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.css"/>
</head>

<style>
  .datepicker table tr td span.active.active, .datepicker table tr td span.active.disabled, .datepicker table tr td span.active.disabled.active, .datepicker table tr td span.active.disabled.disabled, .datepicker table tr td span.active.disabled:active, .datepicker table tr td span.active.disabled:hover, .datepicker table tr td span.active.disabled:hover.active, .datepicker table tr td span.active.disabled:hover.disabled, .datepicker table tr td span.active.disabled:hover:active, .datepicker table tr td span.active.disabled:hover:hover, .datepicker table tr td span.active.disabled:hover[disabled], .datepicker table tr td span.active.disabled[disabled], .datepicker table tr td span.active:active, .datepicker table tr td span.active:hover, .datepicker table tr td span.active:hover.active, .datepicker table tr td span.active:hover.disabled, .datepicker table tr td span.active:hover:active, .datepicker table tr td span.active:hover:hover, .datepicker table tr td span.active:hover[disabled], .datepicker table tr td span.active[disabled] {
    background-color: #042fa5;
  }

  .datepicker table tr td span.focused, .datepicker table tr td span:hover {
    background: #0fc269;
    color: white;
    font-style: italic;
  }

  /*HEADER TABEL*/
  .header-tabel-sub {
    color:#fff;
    font-size: 11px;
    background-color: #344767;
  }
  .header-tabel-num {
    color:#fff;
    font-size: 10px;
    background-color: #1d558682;
  }

  table {
    font-family: "Poppins", sans-serif;
    font-size: 13px;
    font-weight: 500;
    color: #333333;
    border-width: 1px;
    border-color: #3A3A3A;
    border-collapse: collapse;
  }

  td {
    vertical-align: center;
  }

  table tr:hover td {
      cursor: pointer;
  }
  table tr:nth-child(even) td{
      background-color: #a5ffd86e;
  }
  table td {
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #bfefd773;
      background-color: #ffffff;
  }

  .table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #e8e8e8 !important;
    vertical-align: center !important;
  }

  .table {
    --bs-table-color: #272d3a;
    --bs-table-bg: transparent;
    --bs-table-border-color: #e9ecef;
    --bs-table-accent-bg: transparent;
    --bs-table-striped-color: #272d3a;
    --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
    --bs-table-active-color: #272d3a;
    --bs-table-active-bg: rgba(0, 0, 0, 0.1);
    --bs-table-hover-color: #272d3a;
    --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
    width: 100%;
    margin-bottom: 1rem;
    color: var(--bs-table-color);
    vertical-align: top;
    border-color: #272d3a;
  }

  .alert-success {
    border-color: #8febd1;
    background-image: linear-gradient(310deg, #2dce892e 0%, #26adab08 0%);
  }

  .alert-danger {
    border-color: #ef6273ad;
    background-image: linear-gradient(310deg, #f5365c1f 0%, #f3410f52 100%);
  }

  .tokenfield .token {
    margin: -1px 1px 1px 1px;
    height: 25px;
    line-height: 22px;
    color: #fff;
    background-color: #0b5ed7
  }

  .tokenfield .token a {
    color: #FFFFFF;
    text-decoration: none;
  }

  .foto-profile {
    max-width: 300px;
    max-height: 300px;
    margin-bottom: 50px; 
    border-radius: 20rem;
    border-color: #757787;
    border-style: solid;
    box-shadow: 2px 2px 6px 2px #7577879c;
  }

</style>
