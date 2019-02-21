@extends('include.master')
@section('content')
    <section id="portfolio"  class="section-bg" >
        <div class="container">

            @if (isset($details))
                <header class="section-header">
                    <h3 class="section-title"> نتائج البحث عن {{$query}} هي  </h3>
                </header>
                <div class="row portfolio-container">
                    @foreach($details as $flat)
                        @if($flat->status == 1)

                            <div class="col-lg-4 col-md-6 portfolio-item  wow fadeInUp">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img style="width:100%" src="cover_images/{{$flat->cover_image}}">
                                        <a href="cover_images/{{$flat->cover_image}}" data-lightbox="portfolio" data-title="{{$flat->flat_id}}" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="/flats/{{$flat->flat_id}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                    </figure>
                                    <div class="portfolio-info">
                                        <h4>{{$flat->flat_address}}</h4>
                                        <p>{{$flat->created_at}}</p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-4 col-md-6 portfolio-item  wow fadeInUp">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img style="width:100%" src="cover_images/{{$flat->cover_image}}">
                                        <a href="cover_images/{{$flat->cover_image}}" data-lightbox="portfolio" data-title="{{$flat->flat_id}}" class="link-preview" title="مشاهده"><i class="ion ion-eye"></i></a>
                                        <a href="/flats/{{$flat->flat_id}}" class="link-details" title="تفاصيل اكتر"><i class="ion ion-android-open"></i></a>
                                    </figure>
                                    <div class="portfolio-info">
                                        <h4>{{$flat->flat_address}}</h4>
                                        <p>{{$flat->created_at}}</p>
                                    </div>
                                </div>
                            </div>

                        @endif
                    @endforeach
                </div>
            @endif

        </div>
    </section>
@endsection
