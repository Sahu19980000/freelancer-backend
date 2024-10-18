@extends('admin.layouts.master')
@section('title', 'Admin Dashboard |Units')
@section('content')

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Company Techonology List</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Data Tables</li>
                        <li class="breadcrumb-item active">DATA Source DataTables</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- HTML (DOM) sourced data  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('company/technology/create') }}" class="btn btn-primary mb-3" id="addRow">Add New</a>
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="data-source-1" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Company Name</th>
                                        <th>FrontEnd</th>
                                        <th>BackEnd</th>
                                        <th>Cost</th>
                                        <th>Delivery Times</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($count = 0)
                                    @foreach ($companytechs as $data)
                                        <tr>
                                            <td>@php($count++) {{ $count }}</td>
                                            <td>{{ $data->companyname}}</td>
                                            <td>{{ $data->frontend}}</td>
                                            <td>{{ $data->backend}}</td>
                                            <td>{{ $data->avg_cost}}</td>
                                            <td>{{ $data->delivery_time}}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit mt-2"> <a
                                                            href="{{ route('company/technology/edit', $data->id) }}"><i
                                                                class="fa fa-pencil-square-o"
                                                                style="font-size: 20px;"></i></a>
                                                    </li>

                                                    <form method="POST" action="{{ route('company/technology/delete', $data->id) }}"
                                                        style="display:inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button style="background: none; border: none; margin-top:0;">
                                                            <a
                                                                onclick="return confirm('Are you sure you want to delete this data?')"><i
                                                                    class="fa fa-trash" aria-hidden="true"
                                                                    style="font-size: 20px; color:brown"></i></a>
                                                        </button>
                                                    </form>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection
