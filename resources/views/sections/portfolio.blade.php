
    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">What I Did ?</p>
            <h6 class="section-title mb-6">Portfolio</h6>
            <!-- row -->
            <div class="row">
                @foreach ($projects as $project)
                <div class="col-md-4">
                    <a href="{{$project->url}}" target="_blank" class="portfolio-card">
                        <img src="{{asset($project->image)}}" class="portfolio-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>{{$project->name}}</h5>
                                <p class="font-weight-normal"><strong>Category:</strong> {{$project->category->name}}</p>
                                <h6>Visit it!</h6>
                            </span>
                        </span>
                    </a>
                </div>
                @endforeach

            </div><!-- end of row -->
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->
