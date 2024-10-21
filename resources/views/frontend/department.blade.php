@extends('frontend.frontend_masters')
@section('title', 'UniMed - ' . $category->name . ' Departments')
@section('main')
    <!--=================================
            banner -->
    <section class="inner-banner bg-light">
        <div class="container">
            <div class="row align-items-center intro-title">
                <div class="col-12">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('frontend') }}"> <i class="fas fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <i class="fas fa-chevron-right"></i> <span> Departments </span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
              banner -->

    <!--=================================
              Departments -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <!-- Departments-01 START -->
                @foreach ($groupedDepartments as $letter => $items)
                    <div class="col-12 col-lg-12 col-md-12">
                        <p class="display-6">{{ $letter }}</p> <br>
                    </div>
                    @foreach ($items as $item)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="departments-items h-100">
                                <div class="departments-img">
                                    <img class="" src="{{ asset($item->image) }}" alt=""
                                        style="object-fit: cover; object-position: top;" width="356" height="291" />
                                </div>
                                <div class="departments-content">
                                    <a href="{{ route('department.details', $item->id) }}">
                                        <h5 class="text-primary">{{ $item->name }}</h5>
                                    </a>
                                    <p class="mb-0">
                                        {{ $item->short_description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <hr>
                @endforeach
                <!-- Departments-01 END -->
            </div>
        </div>
    </section>
    <!--=================================
              Departments -->

    <!--=================================
@endsection
