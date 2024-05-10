@extends('layouts.dashboard');


@section('content');
<div class="content">
    <div class="main-content">


        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                <h3
                    class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                    Events Edit </h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[0.813rem] ps-[0.5rem]">
                    <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                        href="javascript:void(0);">
                        Events
                        <i
                            class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                    </a>
                </li>
                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                    aria-current="page">
                    Events Edit
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-6">
            <div class="xl:col-span-12 col-span-12">
                <div class="box custom-box">
                    <div class="box-header">
                        <div class="box-title">
                            Edit Event
                        </div>
                    </div>
                    <form action="" method="POST">
                        @method('PATCH')
                        @csrf
                    <div class="box-body">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="xl:col-span-4 col-span-12">
                                <label for="input-label" class="form-label">Events Name :</label>
                                <input type="text" name="name" value=" " class="form-control" id="input-label"
                                    placeholder="Enter Event Name">
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror

                            </div>
                            <div class="xl:col-span-4 col-span-12">
                                <label class="form-label"> Status :</label>
                                <select class="form-control"  data-trigger name="status_id" id="assigned-team-members">
                                    <option value=" "> </option>
                                    

                                    <option value=""></option>
                                 </select>


                            </div>

                            <div class="xl:col-span-4 col-span-12">
                                <label class="form-label"> Date :</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-text text-[#8c9097] dark:text-white/50 !border-e-0"> <i
                                                class="ri-calendar-line"></i> </div>
                                        <input type="text" name="date" value=" " class="form-control" id="weeknum"
                                            placeholder="Choose date">
                                            
                                        </div>
                                        @error('date') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                            </div>
                            <div class="xl:col-span-4 col-span-12">
                                <label class="form-label">From :</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-text text-[#8c9097] dark:text-white/50 !border-e-0"> <i class="ri-time-line"></i> </div>
                                        <input type="text" name="from" value=" " class="form-control" id="timepikcr" placeholder="Choose time">
                            </div>

                                </div>
                                @error('from') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="xl:col-span-4 col-span-12">
                                <label class="form-label">To :</label>
                                <div class="form-group">
                                    <div class="input-group">

                                        <div class="input-group-text text-[#8c9097] dark:text-white/50 !border-e-0"> <i class="ri-time-line"></i> </div>
                                        <input type="text" name="to" value=" " class="form-control" id="timepikcr" placeholder="Choose time">

                                            </div>
                                            @error('to') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="xl:col-span-4 col-span-12">
                                <label class="form-label">Description :</label>
                                <div class="form-group">
                                    <div class="input-group">

                                        <div
                                            class="input-group-text text-[#8c9097] dark:text-white/50 !border-e-0 h-50">
                                            <i class="ri-time-line"></i>
                                        </div>
                                        <input type="text" name="description" value=" " class="form-control" id="input-label"
                                            placeholder="Enter Event Name">
                                            
                                        </div>
                                        @error('description') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                            </div>

                            
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="ti-btn ti-btn-primary btn-wave ms-auto float-right">Edit
                                Event</button>
                        </div>
                    </div>

                </form>

                </div>
            </div>
            <!--End::row-1 -->


        </div>
    </div>

    <!-- END MAIN-CONTENT -->





    @endsection
