@extends('dashboard.layouts.master')
@section('title')
    {{ trans('sections_trans.sections') }}
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('sections_trans.sections') }}</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    {{ trans('sections_trans.list_sections') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    <!-- row -->
    @include('dashboard.messages_alert')
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                            {{ trans('dashboard/sections_trans.add_sections') }}
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example2">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('dashboard/sections_trans.name_sections') }}
                                    </th>
                                    <th class="wd-20p border-bottom-0">{{ trans('dashboard/sections_trans.created_at') }}
                                    </th>
                                    <th class="wd-20p border-bottom-0">{{ trans('dashboard/sections_trans.Processes') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sections as $section)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $section->name }}</td>
                                        <td>{{ $section->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                                data-toggle="modal" href="#edit{{ $section->id }}"><i
                                                    class="las la-pen"></i></a>
                                            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                data-toggle="modal" href="#delete{{ $section->id }}"><i
                                                    class="las la-trash"></i></a>
                                        </td>
                                    </tr>

                                    @include('dashboard.Sections.edit')
                                    @include('dashboard.Sections.delete')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- bd -->
            </div><!-- bd -->
        </div>
        <!--/div-->

        @include('dashboard.Sections.add')
        <!-- /row -->

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
@endsection
