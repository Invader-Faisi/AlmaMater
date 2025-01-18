<div class="container mx-auto p-1">
    <!-- Top 8 Cards with Icons -->
    
    <livewire:components.dashboard-cards />

    <!-- Chart Cards -->
    
    <livewire:components.dashboard-charts />

    <!-- Notice Board and Calendar Cards -->

    <livewire:components.dashboard-notice />
       

    <script>
        $(document).ready(function() {
            
            var ctxPie = $('#pieChart')[0].getContext('2d');
            var pieChart = new Chart(ctxPie, {
                type: 'pie',
                data: {
                    labels: ['Male', 'Female'],
                    datasets: [{
                        data: [600, 600],
                        backgroundColor: ['#500073', '#C30E59']
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            labels: {
                                color: 'white' // White text for legend
                            }
                        }
                    }
                }
            });
        
            var ctxBar = $('#barChart')[0].getContext('2d');
            var barChart = new Chart(ctxBar, {
                type: 'bar',
                data: {
                    labels: ['Class 1', 'Class 2', 'Class 3', 'Class 4', 'Class 5', 'Class 6', 'Class 7', 'Class 8', 'Class 9', 'Class 10'],
                    datasets: [{
                        label: 'Attendance (%)',
                        data: [90, 95, 80, 85, 70, 50, 60, 75, 65, 55],
                        backgroundColor: '#C30E59'
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            labels: {
                                color: 'white' // White text for legend
                            }
                        }
                    },
                    scales: {
                        x: {
                            ticks: {
                                color: 'white' // White text for x-axis labels
                            },
                            grid: {
                                color: 'rgba(255, 255, 255, 0.2)' // Light white grid lines
                            }
                        },
                        y: {
                            ticks: {
                                color: 'white' // White text for y-axis labels
                            },
                            grid: {
                                color: 'rgba(255, 255, 255, 0.2)' // Light white grid lines
                            }
                        }
                    },
                    responsive: true, // Ensure the chart is responsive
                    maintainAspectRatio: false, // Disable aspect ratio maintenance
                }
            });
        
        });
        </script>
</div>