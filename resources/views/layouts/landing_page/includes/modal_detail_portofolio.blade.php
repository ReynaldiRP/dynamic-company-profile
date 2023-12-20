        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    @foreach ($companyProject as $item)
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">{{ $item->client_name }}</h2>
                                        <p class="item-intro text-muted">{{ $item->project_name }}</p>
                                        <img class="img-fluid d-block mx-auto" src="{{ asset($item->image_url) }}"
                                            alt="..." />
                                        <p>{{ $item->description }}</p>
                                    @endforeach
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
