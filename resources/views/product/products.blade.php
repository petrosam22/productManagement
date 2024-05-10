@extends('layouts.dashboard');

@section('content');




<div class="content">
                <div class="main-content">


                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">Event List View</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                    Event
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                                    Event  List View
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-9 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Total Events

                                            <form action ="" method="get">
                                                @csrf
                                                <input class="form-control" type="search" id="all-tasks" name="search" aria-label="...">

                                            </form>
                                        </div>
                                        <div class="flex">
                                            <a href="" class="hs-dropdown-toggle ti-btn ti-btn-primary-full !py-1 !px-2 !text-[0.75rem]" data-hs-overlay="#create-task">
                                                <i class="ri-add-line font-semibold align-middle"></i> Import File
                                            </a>
                                            <div class="hs-dropdown ti-dropdown ms-2">
                                                <button type="button" aria-label="button" class="ti-btn ti-btn-secondary ti-btn-sm" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">

                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Competed Events</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Due Date Events</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Remind Events</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table whitespace-nowrap table-bordered min-w-full">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            <input class="form-check-input check-all" type="checkbox" id="all-tasks" value="" aria-label="...">
                                                        </th>
                                                        <th scope="col" class="text-start">Title</th>
                                                        <th scope="col" class="text-start">Description </th>
                                                        <th scope="col" class="text-start">Weight</th>
                                                        <th scope="col" class="text-start">Category</th>

                                                         <th scope="col" class="text-start">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ( $products as $product )
                                                        
                                                    <tr class="border border-defaultborder task-list">
                                                        <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                       
                                                        <td>
                                                             
{{ $product->title }}
                                                           
                                                        </td>
                                                        <td>

                                                            {{ $product->description }}
                                                        </td>

                                                       
                                                        <td>
                                                            <span class="font-semibold text-primary">
                                                                {{ $product->weight }}

                                                            </span>
                                                        </td>
                                                        <td>
                                                            {{ $product->category->name }}


                                                        </td>

                                                        <td>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a  href="" class="hs-tooltip-toggle ti-btn ti-btn-primary ti-btn-sm">
                                                                    <i class="ri-edit-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                    Edit
                                                                    </span>
                                                                </a>
                                                            </div>



                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <form method="POST" action=>
                                                                    @csrf
                                                                <button type="submit" class="hs-tooltip-toggle ti-btn ti-btn-danger ms-1 ti-btn-sm task-delete-btn">
                                                                    <i class="ri-delete-bin-5-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                      Close
                                                                    </span>
                                                                </button>
                                                            </form>
                                                            </div>
                                                        </td>
                                                        

                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="box-footer">



                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-3 col-span-12">
                                <div class="box">
                                    <div class="box-body !p-0">
                                       
                                        <div class="p-6 border-b dark:border-defaultborder/10 border-dashed flex items-start">
                                            <div class="svg-icon-background bg-success/10 !fill-success me-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-success"><path d="M11.5,20h-6a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h5V7a3,3,0,0,0,3,3h3v5a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,11.56,2H5.5a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h6a1,1,0,0,0,0-2Zm1-14.59L15.09,8H13.5a1,1,0,0,1-1-1ZM7.5,14h6a1,1,0,0,0,0-2h-6a1,1,0,0,0,0,2Zm4,2h-4a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm-4-6h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Zm13.71,6.29a1,1,0,0,0-1.42,0l-3.29,3.3-1.29-1.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0l4-4A1,1,0,0,0,21.21,16.29Z"/></svg>
                                            </div>
                                            <div class="flex-grow">
                                                <h6 class="mb-1 text-[0.75rem]">All Products
                                                    <span class="badge bg-danger text-white font-semibold ltr:float-right rtl:float-left">
                                                       {{ $products->count() }}
                                                    </span>
                                                </h6>
                                                <div>
                                                    <h4 class="text-[1.125rem] font-semibold mb-1"><span class="count-up" data-count=" {{ $products->count() }}">
                                                        {{ $products->count() }}
                                                       
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-6 border-b dark:border-defaultborder/10 border-dashed flex items-start">
                                            <div class="svg-icon-background bg-warning/10 me-4 !fill-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="svg-warning"><path d="M19,12h-7V5c0-0.6-0.4-1-1-1c-5,0-9,4-9,9s4,9,9,9s9-4,9-9C20,12.4,19.6,12,19,12z M12,19.9c-3.8,0.6-7.4-2.1-7.9-5.9C3.5,10.2,6.2,6.6,10,6.1V13c0,0.6,0.4,1,1,1h6.9C17.5,17.1,15.1,19.5,12,19.9z M15,2c-0.6,0-1,0.4-1,1v6c0,0.6,0.4,1,1,1h6c0.6,0,1-0.4,1-1C22,5.1,18.9,2,15,2z M16,8V4.1C18,4.5,19.5,6,19.9,8H16z"/></svg>
                                            </div>
                                            <div class="flex-grow">
                                                <h6 class="mb-1 text-[0.75rem]">Total Category
                                                    <span class="badge bg-danger text-white font-semibold ltr:float-right rtl:float-left">
                                                        {{ $categories->count() }}
                                                    </span>
                                                </h6>
                                                <div>
                                                    <h4 class="text-[1.125rem] font-semibold mb-1"><span class="count-up" data-count=" {{ $categories->count() }}">
                                                        {{ $categories->count() }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->


                </div>
            </div>

@endsection
