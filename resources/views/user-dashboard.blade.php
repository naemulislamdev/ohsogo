@extends('layouts.front-end.app')
@section('title', 'User Dashboard')
@section('main-content')

    <section>
        <div class="container my-5">
            <div class="row text-end">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-primary" type="submit" class="dropdown-item">
                        <i class="fas fa-sign-out-alt"></i> {{ __('Log Out') }}
                    </button>
                </form>
            </div>
            <div class="row my-3">
                <div class="col-lg-4">
                    <h3>Your Order History</h3>
                    <p>You haven't placed any orders yet.</p>
                </div>
                <div class="col-lg-4">
                    <div class="card ">
                        <img style="width: 200px" class="card-img-top"
                            src="https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg?semt=ais_hybrid&w=740&q=80"
                            alt="Title" />
                        <div class="card-body">
                            <h1 class="card-title">
                                <span>{{ Auth::user()->f_name . ' ' . Auth::user()->l_name }}</span>
                            </h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi optio eaque
                                iusto perferendis ipsa facilis iste beatae ea exercitationem voluptate sunt suscipit iure
                                fugiat ex perspiciatis at possimus molestiae, necessitatibus nulla quo. Optio illo numquam
                                necessitatibus consectetur natus quis soluta, doloribus modi consequuntur temporibus, iste
                                ipsa ducimus laudantium, minima officiis voluptate. Officia cupiditate, qui obcaecati veniam
                                dolores expedita quas quidem. Laudantium veritatis animi in ducimus! Mollitia voluptates
                                illo quisquam dolor tempore repellat expedita suscipit harum ut iure commodi porro odit
                                recusandae assumenda vel libero, laborum debitis, a facilis nisi culpa repudiandae?
                                Necessitatibus alias est quod doloribus nulla atque corrupti nihil.</p>


                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <h4>Account details</h4>
                    <h5>{{ Auth::user()->f_name . ' ' . Auth::user()->l_name }}</h5>
                    <h5>{{ Auth::user()->email }}</h5>
                </div>
            </div>
        </div>
    </section>
@endsection
