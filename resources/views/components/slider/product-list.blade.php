@foreach($products as $product)


@if ($loop->index  === 0)
    <div class="carousel-item active">
@else
    <div class="carousel-item">
@endif
                                <div class="row bg-white ">
                                  <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                      <div class="d-flex align-items-center flex-column flex-lg-row">
                                          <div class="tab-content" id="v-pills-tabContent">
                                              <div class="tab-pane fade show active" id="v-pills-image-1-product-{{$loop->index + 1 }}" role="tabpanel" aria-labelledby="v-pills-image-1-product-{{$loop->index + 1 }}-tab" tabindex="0">
                                                  <img src="assets/image/tab/product/surfersco-tab-product-1.png" alt="Bords product {{$loop->index + 1 }} image 1 | Surfer co.">
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-image-2-product-{{$loop->index + 1 }}" role="tabpanel" aria-labelledby="v-pills-image-2-product-{{$loop->index + 1 }}-tab" tabindex="0">
                                                  <img src="assets/image/tab/product/surfersco-tab-product-2.png" alt="Bords product {{$loop->index + 1 }} image 2 | Surfer co.">
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-image-3-product-{{$loop->index + 1 }}" role="tabpanel" aria-labelledby="v-pills-image-3-product-{{$loop->index + 1 }}-tab" tabindex="0">
                                                  <img src="assets/image/tab/product/surfersco-tab-product-3.png" alt="Bords product {{$loop->index + 1 }} image 3 | Surfer co.">
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-image-4-product-{{$loop->index + 1 }}" role="tabpanel" aria-labelledby="v-pills-image-4-product-{{$loop->index + 1 }}-tab" tabindex="0">
                                                  <img src="assets/image/tab/product/surfersco-tab-product-4.png" alt="Bords product {{$loop->index + 1 }} image 4 | Surfer co.">
                                              </div>
                                          </div>
                                          <div class="nav flex-lg-column flex-row" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                              <button class="nav-link p-0 active" id="v-pills-image-1-product-{{$loop->index + 1 }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-image-1-product-{{$loop->index + 1 }}" type="button" role="tab" aria-controls="v-pills-image-1" aria-selected="true">
                                                  <img src="assets/image/tab/mini/surfersco-tab-mini-product-1.png" alt="Bords product {{$loop->index + 1 }} tab-image 1 | Surfer co.">
                                              </button>
                                              <button class="nav-link p-0" id="v-pills-image-2-product-{{$loop->index + 1 }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-image-2-product-{{$loop->index + 1 }}" type="button" role="tab" aria-controls="v-pills-image-2" aria-selected="false">
                                                  <img src="assets/image/tab/mini/surfersco-tab-mini-product-2.png" alt="Bords product {{$loop->index + 1 }} tab-image 2 | Surfer co.">
                                              </button>
                                              <button class="nav-link p-0" id="v-pills-image-3-product-{{$loop->index + 1 }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-image-3-product-{{$loop->index + 1 }}" type="button" role="tab" aria-controls="v-pills-image-3" aria-selected="false">
                                                  <img src="assets/image/tab/mini/surfersco-tab-mini-product-3.png" alt="Bords product {{$loop->index + 1 }} tab-image 3 | Surfer co.">
                                              </button>
                                              <button class="nav-link p-0" id="v-pills-image-4-product-{{$loop->index + 1 }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-image-4-product-{{$loop->index + 1 }}" type="button" role="tab" aria-controls="v-pills-image-4" aria-selected="false">
                                                  <img src="assets/image/tab/mini/surfersco-tab-mini-product-4.png" alt="Bords product {{$loop->index + 1 }} tab-image 4 | Surfer co.">
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 py-5">
                                      <div class="row row-col-2">
                                          <div class="col-lg-9">
                                              <h4>{{ $product->product_name }}</h4>
                                          </div>
                                          <div class="col-lg-3">
                                          </div>
                                          <div class="col-9 valutazione">
                                            @for ($i = 0; $i < 5; $i++)
                                            @if ($product->review  > $i)
                                                <img src="assets/image/svg/icona-stella-piena.svg" class="ico" alt="Valutazione prodotto 1 | Surfer co.">
                                            @else
                                                <img src="assets/image/svg/icona-stella-vuota.svg" class="ico" alt="Valutazione prodotto 1 | Surfer co.">
                                            @endif
                                            @endfor
                                              ({{ $product->review_number}})
                                          </div>
                                          <div class="col-3 d-flex justify-content-end">
                                              <div class="counter">{{$loop->index + 1 }}/{{$loop->count}}</div>
                                          </div>
                                          <div class="col-12 mt-4">
                                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                  <li class="nav-item" role="presentation">
                                                      <button class="nav-link active" id="description-product-{{$loop->index + 1 }}-tab" data-bs-toggle="tab" data-bs-target="#description-product-{{$loop->index + 1 }}-tab-pane" type="button" role="tab" aria-controls="description-product-{{$loop->index + 1 }}-tab-pane" aria-selected="true">Description</button>
                                                  </li>
                                                  <li class="nav-item" role="presentation">
                                                      <button class="nav-link" id="features-product-{{$loop->index + 1 }}-tab" data-bs-toggle="tab" data-bs-target="#features-product-{{$loop->index + 1 }}-tabpane" type="button" role="tab" aria-controls="features-product-{{$loop->index + 1 }}-tabpane" aria-selected="false">Features</button>
                                                  </li>
                                                  <li class="nav-item" role="presentation">
                                                      <button class="nav-link" id="dimensions-product-{{$loop->index + 1 }}-tab" data-bs-toggle="tab" data-bs-target="#dimensions-product-{{$loop->index + 1 }}-tab-pane" type="button" role="tab" aria-controls="dimensions-product-{{$loop->index + 1 }}-tab-pane" aria-selected="false">Dimensions</button>
                                                  </li>
                                              </ul>
                                              <div class="tab-content" id="myTabContent">
                                                  <div class="tab-pane fade show active" id="description-product-{{$loop->index + 1 }}-tab-pane" role="tabpanel" aria-labelledby="description-product-{{$loop->index + 1 }}-tab" tabindex="0"><p>{{ $product->description }}</p></div>
                                                  <div class="tab-pane fade" id="features-product-{{$loop->index + 1 }}-tabpane" role="tabpanel" aria-labelledby="features-product-{{$loop->index + 1 }}-tab" tabindex="0"><p>{{ $product->features }}</p></div>
                                                  <div class="tab-pane fade" id="dimensions-product-{{$loop->index + 1 }}-tab-pane" role="tabpanel" aria-labelledby="dimensions-product-{{$loop->index + 1 }}-tab" tabindex="0"><p>Length = {{ $product->length }} ft x Width = {{ $product->Width }} ft x Thickness = {{ $product->thickness }} in x Rocker = {{ $product->rocker }} ft</p></div>
                                              </div>
                                              <p class="buy d-flex align-items-center pb-5"><span class="price">${{ $product->price}}</span> 
                                                  <a href="#" class="btn btn-lg btn-primary">Buy now</a>
                                              </p>
                                              <a class="view-all" href="#">View all boards</a>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              @endforeach