@extends('frontend.layout.master')
@section('title', 'Dashboard')
@push('styles')
<style>
  .btn-icon-plain {
    background: none;
    border: none;
    padding: 0;
    margin: 0;
    cursor: pointer;
    color: inherit;
    font-size: inherit;
  }

  .rotate {
    transition: transform 0.3s ease;
    display: inline-block;
  }

  .rotate.down {
    transform: rotate(90deg);
  }
</style>
@endpush
@section('content')
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link text-dark active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                            role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                        <a class="nav-link text-dark" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                        @can('add_projects')
                            <a class="nav-link text-dark" href="{{ route('projects.index') }}">Projects</a>
                        @endcan
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <h5>Welcome to Dashboard</h5>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">

                            <form action="">    
                            <div class="row mb-5">
                                <div class="col-6">
                                    <div class="card shadow">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <span>Personal Information</span>
                                            <button type="button"
                                                    class="btn-icon-plain"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne"
                                                    onclick="toggleArrow(this)">
                                            <span class="rotate">&#9654;</span>
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="collapse show">
                                        <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Full Name</label>
                                                            <input class="form-control" name="name" id="name" type="text" value="{{ Auth::user()->name }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Date Of Birth</label>
                                                            <input class="form-control" name="dateofbirth" id="dateofbirth" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Nationality</label>
                                                            <input class="form-control" name="nationality" id="nationality" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Phone Number</label>
                                                            <input class="form-control" name="phoneno" id="phoneno" type="text" value="{{ Auth::user()->phoneno }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Email</label>
                                                            <input class="form-control" name="email" id="email" type="email" value="{{ Auth::user()->email }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Address</label>
                                                            <input class="form-control" name="address" id="address" type="text" value="" placeholder="Street, City, Zip Code, Country">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Join</label>
                                                            <input class="form-control" readonly type="text" value="{{ Auth::user()->created_at->diffForHumans() }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <label for="" class="form-label">Profile Picture</label>
                                            <div class="d-flex justify-content-center mb-4 mt-4">
                                                 <img src="{{ Auth::user()->profile_picture_url ?? asset('assets/img/logo/testimonial.png') }}" alt="" width="150px" class="rounded">
                                            </div>
                                            <input type="file" name="profile_picture" id="profile_picture" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-6">
                                    <div class="card shadow">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <span>Professional Details</span>
                                            <button type="button"
                                                    class="btn-icon-plain"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo"
                                                    aria-expanded="true"
                                                    aria-controls="collapseTwo"
                                                    onclick="toggleArrow(this)">
                                            <span class="rotate">&#9654;</span>
                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="collapse show">
                                        <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Current Position - Title</label>
                                                            <input class="form-control" name="current_position" id="current_position" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Years Of Experience</label>
                                                            <input class="form-control" name="yearsofExperience" id="yearsofExperience" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Skill & Competencies</label>
                                                            <input class="form-control" name="skillCompetencies" id="skillCompetencies" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Certification</label>
                                                            <input class="form-control" name="certification" id="certification" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Language Spoken</label>
                                                            <input class="form-control" name="languageSpoken" id="languageSpoken" type="email" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Portofolio Links</label>
                                                            <input class="form-control" name="potofolioLinks" id="potofolioLinks" type="text" value="" placeholder="Linkedln, Github">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">CV Resume</label>
                                                            <input class="form-control" name="resume" id="resume" type="file" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card shadow">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <span>Company Affiliation</span>
                                            <button type="button"
                                                    class="btn-icon-plain"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree"
                                                    aria-expanded="true"
                                                    aria-controls="collapseThree"
                                                    onclick="toggleArrow(this)">
                                            <span class="rotate">&#9654;</span>
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="collapse show">
                                        <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Company Name</label>
                                                            <input class="form-control" name="companyName" id="companyName" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Department - Division</label>
                                                            <input class="form-control" name="department" id="department" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Role in Company</label>
                                                            <input class="form-control" name="roleInCompany" id="roleInCompany" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Start Date With Company</label>
                                                            <input class="form-control" name="joinWithCompany" id="joinWithCompany" type="text" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-6">
                                    <div class="card shadow">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <span>Documents & Compliance</span>
                                            <button type="button"
                                                    class="btn-icon-plain"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFive"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFive"
                                                    onclick="toggleArrow(this)">
                                            <span class="rotate">&#9654;</span>
                                            </button>
                                        </div>
                                        <div id="collapseFive" class="collapse show">
                                        <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="" class="form-label">ID Proof</label>
                                                            <input class="form-control" name="idProof" id="idProof" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Work Permit - Visa</label>
                                                            <input class="form-control" name="workPermit" id="workPermit" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Contract Signed</label>
                                                            <input class="form-control" name="contractSigned" id="contractSigned" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Background Cek Status</label>
                                                            <input class="form-control" name="backgroundCekStatus" id="backgroundCekStatus" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Bank Details</label>
                                                            <input class="form-control" name="bankDetails" id="bankDetails" type="text" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card shadow">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <span>Availability & Works Preferences</span>
                                            <button type="button"
                                                    class="btn-icon-plain"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFour"
                                                    onclick="toggleArrow(this)">
                                            <span class="rotate">&#9654;</span>
                                            </button>
                                        </div>
                                        <div id="collapseFour" class="collapse show">
                                        <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Availability Date</label>
                                                            <input class="form-control" name="availabilityDate" id="availabilityDate" type="date" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Preferred Work Location</label>
                                                            <input class="form-control" name="preferredWorkLocation" id="preferredWorkLocation" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="willingToTravel" id="willingToTravel" value="1">
                                                                <label class="form-check-label" for="willingToTravel">
                                                                    Willing to Travel
                                                                </label>
                                                             </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Preferred Contract Type</label>
                                                            <input class="form-control" name="preferredContractType" id="preferredContractType" type="text" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row mb-5">
                                <div class="col-6">
                                    <div class="card shadow">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <span>Activity Logs & History</span>
                                            <button type="button"
                                                    class="btn-icon-plain"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSix"
                                                    aria-expanded="true"
                                                    aria-controls="collapseSix"
                                                    onclick="toggleArrow(this)">
                                            <span class="rotate">&#9654;</span>
                                            </button>
                                        </div>
                                        <div id="collapseSix" class="collapse show">
                                        <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Projects Applied</label>
                                                            <input class="form-control" name="projectsApplied" id="projectsApplied" type="date" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Timesheet Records</label>
                                                            <input class="form-control" name="timesheetRecord" id="timesheetRecord" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Feedback Ratings</label>
                                                            <input class="form-control" name="feedbackRatings" id="feedbackRatings" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Messages - Communication Logs</label>
                                                            <input class="form-control" name="communicationLogs" id="communicationLogs" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Login History</label>
                                                            <input class="form-control" name="loginHistory" id="loginHistory" type="text" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <button type="submit" class="btn">Update</button>
                            </div>

                        </form>  
                            {{-- <h5>{{ Auth::user()->name }}</h5>
                            @php
                                $dataArray = json_decode(Auth::user()->roles);
                                $role = current($dataArray);
                            @endphp
                            @if (!empty($dataArray))
                                <p>{{ $role->name }}</p>
                            @else
                                <p>Default</p>
                            @endif --}}
                            {{-- @if (Auth::user()->role == Auth::user()->roles[0]['name'])
                                <p>{{ Auth::user()->roles[0]['name'] }}</p>
                            @else
                                 <p>Default</p>
                            @endif --}}
                        </div>
                        {{-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">...</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
     @push('scripts')
<script>
  function toggleArrow(button) {
    const icon = button.querySelector('.rotate');
    const targetSelector = button.getAttribute('data-bs-target');
    const target = document.querySelector(targetSelector);

    if (!target) return;

    target.addEventListener('shown.bs.collapse', () => {
      icon.classList.add('down');
    }, { once: true });

    target.addEventListener('hidden.bs.collapse', () => {
      icon.classList.remove('down');
    }, { once: true });
  }

  document.addEventListener('DOMContentLoaded', () => {
    
    document.querySelectorAll('.collapse').forEach(collapse => {
      const icon = collapse.previousElementSibling?.querySelector('.rotate');
      if (collapse.classList.contains('show') && icon) {
        icon.classList.add('down');
      }
    });
  });
</script>
@endpush
@endsection
