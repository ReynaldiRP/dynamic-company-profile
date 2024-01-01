            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Timeline Sejarah</h2>
                    <h3 class="section-subheading text-muted">PT. Maju Jaya Sentosa.</h3>
                </div>
                <ul class="timeline">
                    @php $counter = 0; @endphp
                    @foreach ($companyHistory as $item)
                        @if ($counter % 2 == 0)
                            <li>
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="{{ asset($item->image_url) }}"
                                        alt="..." />
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>{{ Carbon\Carbon::parse($item->year)->translatedFormat('l, d/F/Y') }}
                                        </h4>
                                        <h4 class="subheading">{{ $item->title }}</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">{{ $item->description }}</p>
                                    </div>
                                </div>
                            </li>
                        @else
                            <li class="timeline-inverted">
                                <div class="timeline-image"><img class="rounded-circle img-fluid"
                                        src="{{ asset($item->image_url) }}" alt="..." /></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>{{ Carbon\Carbon::parse($item->year)->translatedFormat('l, d-F-Y') }}
                                        </h4>
                                        <h4 class="subheading">{{ $item->title }}</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">{{ $item->description }}</p>
                                    </div>
                                </div>
                            </li>
                        @endif
                        @php $counter++; @endphp
                    @endforeach
                    {{-- <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                                alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2015</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                    voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit
                                    vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg"
                                alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2020</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                    voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit
                                    vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li> --}}
                </ul>
            </div>
