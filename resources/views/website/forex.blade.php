@extends('layouts.app')

@section('title')
    Olxforex | Forex
@endsection


@section('content')
    
<div id="forex">
    <section class="container">
        <h1 class="text-center my-5">Forex charts</h1>
        <div class="row">
            <div class="col-sm-9">
                <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div id="tradingview_5541d"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.widget(
    {
    "width": "100%",
    "height": "660",
    "symbol": "FX:EURUSD",
    "interval": "1",
    "timezone": "Etc/UTC",
    "theme": "light",
    "style": "1",
    "locale": "en",
    "toolbar_bg": "#f1f3f6",
    "enable_publishing": false,
    "allow_symbol_change": true,
    "calendar": false,
    "container_id": "tradingview_5541d"
  }
    );
    </script>
  </div>
  <!-- TradingView Widget END -->
            </div>
            <div class="col-sm-3">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                {
                "colorTheme": "light",
                "dateRange": "1D",
                "showChart": true,
                "locale": "en",
                "largeChartUrl": "",
                "isTransparent": false,
                "showSymbolLogo": true,
                "showFloatingTooltip": false,
                "width": "400",
                "height": "660",
                "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                "gridLineColor": "rgba(240, 243, 250, 0)",
                "scaleFontColor": "rgba(106, 109, 120, 1)",
                "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                "tabs": [
                {
                    "title": "Indices",
                    "symbols": [
                    {
                        "s": "FOREXCOM:SPXUSD",
                        "d": "S&P 500"
                    },
                    {
                        "s": "FOREXCOM:NSXUSD",
                        "d": "US 100"
                    },
                    {
                        "s": "FOREXCOM:DJI",
                        "d": "Dow 30"
                    },
                    {
                        "s": "INDEX:NKY",
                        "d": "Nikkei 225"
                    },
                    {
                        "s": "INDEX:DEU40",
                        "d": "DAX Index"
                    },
                    {
                        "s": "FOREXCOM:UKXGBP",
                        "d": "UK 100"
                    }
                    ],
                    "originalTitle": "Indices"
                },
                {
                    "title": "Futures",
                    "symbols": [
                    {
                        "s": "CME_MINI:ES1!",
                        "d": "S&P 500"
                    },
                    {
                        "s": "CME:6E1!",
                        "d": "Euro"
                    },
                    {
                        "s": "COMEX:GC1!",
                        "d": "Gold"
                    },
                    {
                        "s": "NYMEX:CL1!",
                        "d": "Crude Oil"
                    },
                    {
                        "s": "NYMEX:NG1!",
                        "d": "Natural Gas"
                    },
                    {
                        "s": "CBOT:ZC1!",
                        "d": "Corn"
                    }
                    ],
                    "originalTitle": "Futures"
                },
                {
                    "title": "Bonds",
                    "symbols": [
                    {
                        "s": "CME:GE1!",
                        "d": "Eurodollar"
                    },
                    {
                        "s": "CBOT:ZB1!",
                        "d": "T-Bond"
                    },
                    {
                        "s": "CBOT:UB1!",
                        "d": "Ultra T-Bond"
                    },
                    {
                        "s": "EUREX:FGBL1!",
                        "d": "Euro Bund"
                    },
                    {
                        "s": "EUREX:FBTP1!",
                        "d": "Euro BTP"
                    },
                    {
                        "s": "EUREX:FGBM1!",
                        "d": "Euro BOBL"
                    }
                    ],
                    "originalTitle": "Bonds"
                },
                {
                    "title": "Forex",
                    "symbols": [
                    {
                        "s": "FX:EURUSD",
                        "d": "EUR/USD"
                    },
                    {
                        "s": "FX:GBPUSD",
                        "d": "GBP/USD"
                    },
                    {
                        "s": "FX:USDJPY",
                        "d": "USD/JPY"
                    },
                    {
                        "s": "FX:USDCHF",
                        "d": "USD/CHF"
                    },
                    {
                        "s": "FX:AUDUSD",
                        "d": "AUD/USD"
                    },
                    {
                        "s": "FX:USDCAD",
                        "d": "USD/CAD"
                    }
                    ],
                    "originalTitle": "Forex"
                }
                ]
            }
                </script>
            </div>
            <!-- TradingView Widget END -->
            </div>
        </div>
        
    </section>
</div>

   
@endsection

@section('script')
<script src="{{ asset('asset/js/main.min.js') }}"></script>
@endsection