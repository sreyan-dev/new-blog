@extends('layout')
@section('content')
    <div class="main-content">
        <section id="overview">
            <h2>Overview</h2>
            <div class="overview">
                <div class="card">
                    <h3>Users</h3>
                    <p>1,234</p>
                </div>
                <div class="card">
                    <h3>Revenue</h3>
                    <p>$12,345</p>
                </div>
                <div class="card">
                    <h3>Projects</h3>
                    <p>56</p>
                </div>
            </div>
        </section>

        <section id="data">
            <h2>Data</h2>
            ```chartjs
            {
                "type": "bar",
                "data": {
                    "labels": ["January", "February", "March", "April", "May"],
                    "datasets": [{
                        "label": "Monthly Performance",
                        "data": [65, 59, 80, 81, 56],
                        "backgroundColor": "#E6B800",
                        "borderColor": "#1B263B",
                        "borderWidth": 1
                    }]
                },
                "options": {
                    "scales": {
                        "y": {
                            "beginAtZero": true
                        }
                    }
                }
            }
            ```
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Project Alpha</td>
                        <td>Active</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Project Beta</td>
                        <td>Pending</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="notifications">
            <div class="notifications">
                <h2>Notifications</h2>
                <ul>
                    <li>New user registered</li>
                    <li>Project Alpha completed</li>
                    <li>System update scheduled</li>
                </ul>
            </div>
        </section>
    </div>
@endSection