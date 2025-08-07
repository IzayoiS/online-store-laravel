@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transaction
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Transactions</h2>
    <p class="dashboard-subtitle">
        Big result start from the small one
    </p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-12 mt-2">
        <ul
            class="nav nav-pills mb-3"
            id="pills-tab"
            role="tablist"
        >
            <li class="nav-item" role="presentation">
            <a
                class="nav-link active"
                id="sell-product-tab"
                data-toggle="pill"
                href="#sell-product"
                role="tab"
                aria-controls="sell-product"
                aria-selected="true"
                >Sell Product</a
            >
            </li>
            <li class="nav-item" role="presentation">
            <a
                class="nav-link"
                id="buy-product-tab"
                data-toggle="pill"
                href="#buy-product"
                role="tab"
                aria-controls="buy-product"
                aria-selected="false"
                >Buy Product</a
            >
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div
            class="tab-pane fade show active"
            id="sell-product"
            role="tabpanel"
            aria-labelledby="sell-product-tab"
            >
            <a
                href="/dashboard-transactions-details.html"
                class="card card-list d-block"
            >
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img
                        src="/images/dashboard-icon-product-1.svg"
                        alt=""
                    />
                    </div>
                    <div class="col-md-4">Shirup Marzzan</div>
                    <div class="col-md-3">Angga Risky</div>
                    <div class="col-md-3">12 Januari, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img
                        src="/images/dashboard-arrow-right.svg"
                        alt=""
                    />
                    </div>
                </div>
                </div>
            </a>
            <a
                href="/dashboard-transactions-details.html"
                class="card card-list d-block"
            >
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img
                        src="/images/dashboard-icon-product-2.svg"
                        alt=""
                    />
                    </div>
                    <div class="col-md-4">LeBrone X</div>
                    <div class="col-md-3">Masayoshi</div>
                    <div class="col-md-3">11 January, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img
                        src="/images/dashboard-arrow-right.svg"
                        alt=""
                    />
                    </div>
                </div>
                </div>
            </a>
            <a
                href="/dashboard-transactions-details.html"
                class="card card-list d-block"
            >
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img
                        src="/images/dashboard-icon-product-3.svg"
                        alt=""
                    />
                    </div>
                    <div class="col-md-4">Soffa Lembutte</div>
                    <div class="col-md-3">Shayna</div>
                    <div class="col-md-3">11 January, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img
                        src="/images/dashboard-arrow-right.svg"
                        alt=""
                    />
                    </div>
                </div>
                </div>
            </a>
            </div>
            <div
            class="tab-pane fade"
            id="buy-product"
            role="tabpanel"
            aria-labelledby="buy-product-tab"
            >
            <a
                href="/dashboard-transactions-details.html"
                class="card card-list d-block"
            >
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img
                        src="/images/dashboard-icon-product-3.svg"
                        alt=""
                    />
                    </div>
                    <div class="col-md-4">Soffa Lembutte</div>
                    <div class="col-md-3">Shayna</div>
                    <div class="col-md-3">11 January, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img
                        src="/images/dashboard-arrow-right.svg"
                        alt=""
                    />
                    </div>
                </div>
                </div>
            </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection