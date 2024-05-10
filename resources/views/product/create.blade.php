@extends('layouts.dashboard');


@section('content');
<div class="content">
    <div class="main-content">


        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                <h3
                    class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                    Products Create </h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[0.813rem] ps-[0.5rem]">
                    <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                        href="javascript:void(0);">
                        Products
                        <i
                            class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                    </a>
                </li>
                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                    aria-current="page">
                    Products Create
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
                            Create Product
                        </div>
                    </div>
                    <form action="{{route('product.store')}}" method="POST">
                        @csrf
                    <div class="box-body">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="xl:col-span-4 col-span-12">
                                <label for="input-label" class="form-label">Product Name :</label>
                                <input type="text" name="title" class="form-control" id="input-label"
                                    placeholder="Enter Product Name">
                                @error('title') <span class="text-danger">{{$message}}</span> @enderror

                            </div>
                            <div class="xl:col-span-4 col-span-12">
                                <label for="input-label" class="form-label">Product Description :</label>
                                <input type="text" name="description" class="form-control" id="input-label"
                                    placeholder="Enter Product Name">
                                @error('description') <span class="text-danger">{{$message}}</span> @enderror

                            </div>
                            <div class="xl:col-span-4 col-span-12">
                                <label for="input-label" class="form-label">Product Weight :</label>
                                <input type="text" name="weight" class="form-control" id="input-label"
                                    placeholder="Enter Product Weight">
                                @error('weight') <span class="text-danger">{{$message}}</span> @enderror

                            </div>
                            <div class="xl:col-span-4 col-span-12">
                                <label for="input-label" class="form-label">Product Category :</label>
                                <select class="form-control"  name="category_id">
                                    @foreach ($categories as $category )

                                    <option value="{{$category->id}}">{{ $category->name }} </option>
                                    @endforeach
                                </select>


                            </div>



                        </div>
                        <div class="box-footer">
                            <button type="submit" class="ti-btn ti-btn-primary btn-wave ms-auto float-right">Create
                                Product</button>
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
