@extends('backend.layouts.master')
@section('title') Reports @endsection
@section('main-content')

<div class="container">
    <h1>Reports</h1>

    <!-- Girls Chart -->
    <canvas id="girlsChart"></canvas>

    <!-- Events Chart -->
    <canvas id="eventsChart"></canvas>

    <!-- Progresses Chart -->
    <canvas id="progressesChart"></canvas>

    <!-- Materials Chart -->
    <canvas id="materialsChart"></canvas>

    <!-- Skills Chart -->
    <canvas id="skillsChart"></canvas>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Girls Chart
    var girlsCtx = document.getElementById('girlsChart').getContext('2d');
    var girlsChart = new Chart(girlsCtx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($girls->pluck('name')) !!},
            datasets: [{
                label: 'Age of Girls',
                data: {!! json_encode($girls->pluck('age')) !!},
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Events Chart
    var eventsCtx = document.getElementById('eventsChart').getContext('2d');
    var eventsChart = new Chart(eventsCtx, {
        type: 'pie',
        data: {
            labels: {!! json_encode($events->pluck('event_type')) !!},
            datasets: [{
                label: 'Events',
                data: {!! json_encode($events->pluck('id')) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw.toLocaleString();
                        }
                    }
                }
            }
        }
    });

    // Progresses Chart
    var progressesCtx = document.getElementById('progressesChart').getContext('2d');
    var progressesChart = new Chart(progressesCtx, {
        type: 'doughnut',
        data: {
            labels: ['Lessons Attended', 'Skills Attained'],
            datasets: [{
                label: 'Progresses',
                data: [
                    {{ $progresses->sum('lessons_attended') }},
                    {{ $progresses->sum('skills_attained') }}
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw.toLocaleString();
                        }
                    }
                }
            }
        }
    });

    // Materials Chart
    var materialsCtx = document.getElementById('materialsChart').getContext('2d');
    var materialsChart = new Chart(materialsCtx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($materials->pluck('name')) !!},
            datasets: [{
                label: 'Materials Quantity',
                data: {!! json_encode($materials->pluck('quantity')->map(function($item) { return (int) $item; })) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Skills Chart
    var skillsCtx = document.getElementById('skillsChart').getContext('2d');
    var skillsChart = new Chart(skillsCtx, {
        type: 'radar',
        data: {
            labels: {!! json_encode($skills->pluck('name')) !!},
            datasets: [{
                label: 'Skill Levels',
                data: {!! json_encode($skills->pluck('level')->map(function($item) { return (int) $item; })) !!},
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                r: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });
</script>
@endsection
