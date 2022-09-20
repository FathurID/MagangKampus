@extends('_layout.layout_main')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-3 text-dark" href="javascript:;">
                    <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>Kampus Gratis </title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(0.000000, 148.000000)">
                                        <path
                                            d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                        </path>
                                        <path
                                            d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
            </li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">User</a>
            </li>
            <li class="breadcrumb-item text-sm text-dark" aria-current="page">Verify User</li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Verify</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Credentials and Files</h6>
    </nav>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="px-5 pt-5 fw-bolder h4 text-decoration-underline">
                    Credentials
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="/verifyUser-verify">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <div class="h6">Program Studi</div>
                                        <div class="small">{{$data->study_program}}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h6">Semester</div>
                                        <div class="small">{{$data->semester}}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h6">NIN</div>
                                        <div class="small" id="nin" name="nin">{{$data->nin}}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h6">NIN Address</div>
                                        <div class="small">{{$data->nin_address}}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h6">Phone number</div>
                                        <div class="small">{{$data->phone}}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h6">Residence Address</div>
                                        <div class="small">{{$data->residence_address}}</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <div class="h6">Birth Place</div>
                                        <div class="small">{{$data->birth_place}}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h6">Domicile</div>
                                        <div class="small">{{$data->domicile}}</div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="h6">Financier</div>
                                        <div class="small">{{$data->financier}}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h6">Job</div>
                                        <div class="small">{{$data->job}}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h6">Income</div>
                                        <div class="small">{{$data->income}}</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <div class="h6">Father's Name</div>
                                        <div class="small">{{$data->father_name}}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h6">Father's Occupation</div>
                                        <div class="small">{{$data->father_occupation}}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h6">Mother's Name</div>
                                        <div class="small">{{$data->mother_name}}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h6">Mother's Occupation</div>
                                        <div class="small">{{$data->mother_occupation}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="container">
                            <div class="fw-bolder h4 text-decoration-underline mb-4">
                                Documents
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <div class="h6">Integrity Pact</div>
                                    <img src="{{ asset('assets/img/documents/'.$data->integrity_pact) }}"
                                    class="img-fluid imeg">
                                    <div class="small p-0 m-0">
                                        <a class="text-decoration-underline text-link"
                                            target="_blank"
                                            href="/download/{{$data->integrity_pact}}">
                                            {{$data->integrity_pact}}
                                        </a>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <input type="checkbox" name="valid[]" value="integrity_pact">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-10">
                                    <div class="h6">NIN Card</div>
                                    <img src="{{ asset('assets/img/documents/'.$data->nin_card) }}"
                                    class="img-fluid imeg">
                                    <div class="small p-0 m-0">
                                        <a class="text-decoration-underline text-link"
                                        target="_blank"
                                            href="/download/{{$data->nin_card}}">
                                            {{$data->nin_card}}
                                        </a>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <input type="checkbox" name="valid[]" value="nin_card">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-10">
                                    <div class="h6">Family Card</div>
                                    <img src="{{ asset('assets/img/documents/'.$data->family_card) }}"
                                    class="img-fluid imeg">
                                    <div class="small p-0 m-0">
                                        <a class="text-decoration-underline text-link"
                                            target="_blank"
                                            href="/download/{{$data->family_card}}">
                                            {{$data->family_card}}
                                        </a>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <input type="checkbox" name="valid[]" value="family_card">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-10">
                                    <div class="h6">Certificate</div>
                                    <img src="{{ asset('assets/img/documents/'.$data->certificate) }}"
                                    class="img-fluid imeg">
                                    <div class="small p-0 m-0">
                                        <a class="text-decoration-underline text-link"
                                            target="_blank"
                                            href="/download/{{$data->certificate}}">
                                            {{$data->certificate}}
                                        </a>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <input type="checkbox" name="valid[]" value="certificate">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-10">
                                    <div class="h6">Photo</div>
                                    <img src="{{ asset('assets/img/documents/'.$data->photo) }}"
                                    class="img-fluid imeg">
                                    <div class="small p-0 m-0">
                                        <a class="text-decoration-underline text-link"
                                            target="_blank"
                                            href="/download/{{$data->photo}}">
                                            {{$data->photo}}
                                        </a>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <input type="checkbox" name="valid[]" value="photo">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-10">
                                    <div class="h6">Transcript</div>
                                    <img src="{{ asset('assets/img/documents/'.$data->transcript) }}"
                                    class="img-fluid imeg">
                                    <div class="small p-0 m-0">
                                        <a class="text-decoration-underline text-link"
                                            target="_blank"
                                            href="/download/{{$data->transcript}}">
                                            {{$data->transcript}}
                                        </a>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <input type="checkbox" name="valid[]" value="transcript">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-10">
                                    <div class="h6">Recommendation Letter</div>
                                    <img src="{{ asset('assets/img/documents/'.$data->recommendation_letter) }}"
                                    class="img-fluid imeg">
                                    <div class="small p-0 m-0">
                                        <a class="text-decoration-underline text-link"
                                            target="_blank"
                                            href="/download/{{$data->recommendation_letter}}">
                                            {{$data->recommendation_letter}}
                                        </a>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <input type="checkbox" name="valid[]" value="reccomendation_letter">
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn bg-gradient-success btn-sm p-2 mt-4">
                            <i class="fas fa-check"></i>
                            Verify
                        </button>
                        <button type="submit" class="btn bg-gradient-danger btn-sm p-2 mt-4">
                            <i class="fas fa-times"></i>
                            Deny
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
   const images = document.getElementsByClassName('imeg');
   for(var i = 0; i < 1; i++) {
    console.log(1)
    console.log(images[i])
    images[i].addEventListener('click', function(e) {
        e.preventDefault();
        console.log("dada")
    })
   }
</script>
