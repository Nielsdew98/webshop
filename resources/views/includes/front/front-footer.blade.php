<footer class="bg-light w-100 mx-0 p-2 mt-6">
    <div class="row align-items-center justify-content-around w-100">
        <article>
            <p>Copyright &copy; Niels De Witte</p>
        </article>
        <article>
            <nav>
                <ul class="d-lg-flex">
                    <li class="mr-2"><a href="{{route('homepage')}}">Home</a></li>
                    <li class="mr-2"><a href="{{route('shopPage')}}">Shop</a></li>
                    <li class="mr-2"><a href="{{route('contactPage')}}">Contacteer ons</a></li>
                    <li class="mr-2"><a href="" data-toggle="modal" data-target="#nieuwsbriefModal">Nieuwsbrief</a></li>
                </ul>
            </nav>
        </article>
        <article>
            <ul class="socialmedia d-flex flex-wrap align-items-center">
                <li><a class="btn-floating btn-lg" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="btn-floating btn-lg" href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a class="btn-floating btn-lg" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a class="btn-floating btn-lg" href="mailto:info@bd.be"><i class="fas fa-envelope"></i></a></li>
                <li><a class="btn-floating btn-lg" href="#"><i class="fab fa-reddit-alien"></i></a></li>
            </ul>
        </article>
    </div>
    <div class="modal fade" id="nieuwsbriefModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nieuwsbrief</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{route('newsletter')}}">
                    @csrf
                    @method('POST')
                     <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <input type="text" name="email" id="reviewTitel" class="form-control" required=""
                                           placeholder="email">
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluit</button>
                        <input type="submit" class="btn btn-primary" name="aanmelden">
                    </div>
                </form>
            </div>
        </div>
    </div>

</footer>
