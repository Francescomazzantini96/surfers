<form action="/surfersMail" method="GET" class="row">
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" name="name" id="form-name" placeholder="Name">
                            </div>
                            @error('name')
                            <div class="alert alert-danger">
                            @foreach($errors->get('name') as $error)
                                {{$error}}<br>
                            @endforeach
                            </div>
                            @enderror
                            
                            <div class="col-12 mb-3">
                                <input type="email" class="form-control" name="mail" id="form-email" placeholder="Email">
                            </div>
                            @error('mail')
                            <div class="alert alert-danger">
                            @foreach($errors->get('mail') as $error)
                                {{$error}}<br>
                            @endforeach
                            </div>
                            @enderror

                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="birth_place" id="form-birth-place" placeholder="Birth place">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="date" class="form-control" name="birth_day" id="form-birthday" placeholder="Birthday">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="tel" class="form-control" name="phone" id="form-phone" placeholder="Phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="company" id="form-company" placeholder="Company">
                            </div>

                            <div class="col-12 mb-3">
                                <textarea class="form-control" name="message" id="form-message" placeholder="Your Messages"></textarea>
                            </div>
                            
                            <div class="col-12 mb-3">
                                <input class="form-check-input" type="checkbox" id="form-privacy">
                                <label class="form-check-label" for="form-privacy">
                                  Accept privacy policy
                                </label>
                            </div>

                            <div class="col-12 mb-3">
                                <input type="submit" class="btn btn-lg btn-primary" value="Send">
                            </div>
                        </form>