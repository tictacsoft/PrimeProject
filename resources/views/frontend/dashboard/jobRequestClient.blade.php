<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
  <style>
    body {
      font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
      background: linear-gradient(to right, #ffffff 0%, #fdfafa 70%);
      min-height: 100vh;
    }
  </style>
</head>
<body class="bg-white">
    <div class="d-flex align-items-center justify-content-between px-4 pt-4" style="font-family: 'Instrument Sans', sans-serif;">
    <!-- Logo -->
    <img src="{{ asset('assets/img/logo/pd-logo.avif') }}" alt="Logo" style="height: 50px;">

    <!-- Title Center -->
    <h2 class="text-center flex-grow-1 fw-semibold m-0" style="margin-right: 120px;">
      Form Project Request
    </h2>
  </div>
  <div class="container py-5">
    <form action="{{ route('job-request.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
    <!-- 1. General Project Information -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-secondary text-white">General Project Information</div>
      <div class="card-body">
        <div class="mb-3">
          <label class="form-label" for="project_title">Project Title</label>
          <input type="text" class="form-control" id="project_title" name="project_title" value="{{ old('project_title') }}">
          @error('project_title')
              <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label" for="project_description">Project Description</label>
          <textarea class="form-control" id="project_description"  name="project_description">{{ old('project_description') }}</textarea>
          @error('project_description')
              <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label" for="client_company">Client Company</label>
          <input type="text" class="form-control" id="client_company" name="client_company" value="{{ old('client_company') }}">
          @error('client_company')
              <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label" for="project_location">Project Location</label>
          <select class="form-select" id="project_location" name="project_location">
            <option value="">Choose Project Location</option>
            <option value="onsite">Onsite</option>
            <option value="remote">Remote</option>
            <option value="hybrid">Hybrid</option>
          </select>
        </div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label" for="project_start_date">Start Date</label>
            <input type="date" class="form-control" id="project_start_date" name="project_start_date">
          </div>
          <div class="col">
            <label class="form-label" for="project_end_date">End Date</label>
            <input type="date" class="form-control" id="project_end_date" name="project_end_date">
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="duration">Duration</label>
          <div class="input-group">
            <input type="number" class="form-control" id="duration" name="duration">
            <select class="form-select" name="duration_unit">
              <option value="">Choose Duration Unit</option>
              <option value="day">Day</option>
              <option value="month">Month</option>
              <option value="year">Year</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <!-- 2. Position & Skill Requirements -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-secondary text-white">Position & Skill Requirements</div>
      <div class="card-body">
        <div class="mb-3">
          <label class="form-label" for="position_title">Position Title</label>
          <input type="text" class="form-control" id="position_title" name="position_title">
        </div>
        <div class="mb-3">
          <label class="form-label" for="number_of_resources">Number of Resources</label>
          <input type="number" class="form-control" id="number_of_resources" name="number_of_resources">
        </div>
        <div class="mb-3">
          <label class="form-label" for="job_level">Job Level</label>
          <select class="form-select" id="job_level" name="job_level">
            <option value="">Choose Job Level</option>
            <option value="junior" {{ old('job_level') == 'junior' ? 'selected' : '' }}>Junior</option>
            <option value="mid" {{ old('job_level') == 'mid' ? 'selected' : '' }}>Mid</option>
            <option value="senior" {{ old('job_level') == 'senior' ? 'selected' : '' }}>Senior</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label" for="skill_required">Skills Required</label>
          <input type="text" class="form-control" id="skill_required" name="skill_required" placeholder="Tag input (comma separated)">
        </div>
        <div class="mb-3">
          <label class="form-label" for="job_description">Job Description</label>
          <textarea class="form-control" name="job_description" id="job_description"></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label" for="nice_to_have_skills">Nice to Have Skills</label>
          <input type="text" class="form-control" id="nice_to_have_skills" name="nice_to_have_skills">
        </div>
      </div>
    </div>

    <!-- 3. Work Arrangement & Contract -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-secondary text-white">Work Arrangement & Contract</div>
      <div class="card-body">
        <div class="mb-3">
          <label class="form-label" for="work_type">Work Type</label>
          <select class="form-select" id="work_type" name="work_type">
            <option value="">Choose Work Type</option>
            <option value="onsite">Onsite</option>
            <option value="remote">Remote</option>
            <option value="hybrid">Hybrid</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label" for="work_location">Work Location</label>
          <textarea class="form-control" id="work_location" name="work_location"></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label" for="rate_type">Rate Type</label>
          <select class="form-select" id="rate_type" name="rate_type">
            <option value="">Choose Rate Type</option>
            <option value="hourly">Hourly</option>
            <option value="daily">Daily</option>
            <option value="monthly">Monthly</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label" for="budget_range">Budget Range</label>
          <input type="text" class="form-control" id="budget_range" name="budget_range">
        </div>
        <div class="mb-3">
          <label class="form-label" for="contract_type">Contract Type</label>
          <select class="form-select" id="contract_type" name="contract_type">
            <option value="">Choose Contract Type</option>
            <option value="project based">Project-based</option>
            <option value="time based">Time-based</option>
            <option value="full time outsourcing">Full-time Outsourcing</option>
          </select>
        </div>
      </div>
    </div>

    <!-- 4. Screening & Interview -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-secondary text-white">Screening & Interview</div>
      <div class="card-body">
        <div class="mb-3">
          <label class="form-label" for="interview_required">Interview Required</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="interview_required" name="interview_required">
            <label class="form-check-label">Yes</label>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="interview_method">Interview Method</label>
          <select class="form-select" id="interview_method" name="interview_method">
            <option value="">Choose Interview Method</option>
            <option value="online">Online</option>
            <option value="offline">Offline</option>
            <option value="by vendor">By Vendor</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label" for="interview_slots">Interview Slots</label>
          <input type="datetime-local" class="form-control" id="interview_slots" name="interview_slots">
        </div>
      </div>
    </div>

    <!-- 5. Internal Notes / Attachments -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-secondary text-white">Internal Notes / Attachments</div>
      <div class="card-body">
        <div class="mb-3">
          <label class="form-label" for="internal_notes">Internal Notes</label>
          <textarea class="form-control" id="internal_notes" name="internal_notes"></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label" for="attachment">Attachment</label>
          <input type="file" class="form-control" id="attachment" name="attachment">
        </div>
      </div>
    </div>

    <div class="text-end">
      <button class="btn btn-secondary" type="submit">Submit</button>
    </div>
  </form>
  </div>
</body>
</html>