<h2>Dashboard</h2>
<div class="dashboard-stats">
    <div class="stat-card">
        <h3>Total Users</h3>
        <p><?= $user_count ?></p>
    </div>
    <div class="stat-card">
        <h3>Total Categories</h3>
        <p><?= $category_count ?></p>
    </div>
    <div class="stat-card">
        <h3>Total Transactions</h3>
        <p><?= $transaction_count ?></p>
    </div>
    <div class="stat-card">
        <h3>Total Budget</h3>
        <p>$<?= number_format($total_budget, 2) ?></p>
    </div>
</div>

<div class="chart-container">
    <canvas id="categoryChart"></canvas>
</div>

<h3>Recent Transactions</h3>
<table class="admin-table">
    <thead>
        <tr>
            <th>User</th>
            <th>Category</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($recent_transactions as $transaction): ?>
            <tr>
                <td><?= $transaction['firstname'] . ' ' . $transaction['lastname'] ?></td>
                <td><?= $transaction['category_name'] ?></td>
                <td>$<?= number_format($transaction['amount'], 2) ?></td>
                <td><?= date('M d, Y', strtotime($transaction['timestamp'])) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('categoryChart').getContext('2d');
    const categoryData = <?= json_encode($category_totals) ?>;
    
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: categoryData.map(item => item.category_name),
            datasets: [{
                label: 'Total Budget',
                data: categoryData.map(item => item.total),
                backgroundColor: 'rgba(54, 162, 235, 0.8)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return '$' + value.toLocaleString();
                        }
                    }
                }
            }
        }
    });
});
</script>

