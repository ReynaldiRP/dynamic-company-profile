            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">PT. Maju Jaya Sentosa</h3>
                </div>
                <div class="row">
                    @foreach ($companyProject as $item)
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="{{ asset($item->image_url) }}" alt="..." />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">{{ $item->client_name }}</div>
                                    <div class="portfolio-caption-subheading text-muted">{{ $item->project_name }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
