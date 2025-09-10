<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tienda | Repuestos Super Victoria</title>
    <meta name="description"
        content="Corporación Super Repuestos, tu mejor aliado en repuestos multimarca, es una empresa dedicada a la venta de repuestos y accesorios para vehículos, ofreciendo productos de alta calidad y un servicio excepcional.">
    <meta name="keywords"
        content="Corporación Super Repuestos, repuestos multimarca, venta de repuestos, accesorios para vehículos, servicio excepcional, calidad en repuestos, repuestos de alta calidad, empresa de repuestos, repuestos y accesorios, vehiculos, automóviles, camionetas, motos, repuestos para autos, repuestos para camionetas, repuestos para motos, accesorios de vehículos, venta de accesorios, servicio al cliente, atención al cliente, repuestos confiables, repuestos duraderos, Jeep, Ford, Chevrolet, Toyota, Nissan, Hyundai, Kia, Volkswagen, Honda, Mitsubishi, Subaru, Mazda, Suzuki, Isuzu, repuestos para Ford, repuestos para Chevrolet, repuestos para Toyota, repuestos para Nissan, repuestos para Hyundai, repuestos para Kia, repuestos para Volkswagen, repuestos para Honda, repuestos para Mitsubishi, repuestos para Subaru, repuestos para Mazda, repuestos para Suzuki, repuestos para Isuzu">
    <meta name="author" content="Gianni Imperato" />
    <meta name="copyright" content="Corporación Super Repuestos" />
    <meta name="robots" content="index" />

    <!-- Favicons -->
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="Icono Corporación Super Repuestos">
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="Icono Corporación Super Repuestos">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" />

    <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <title>Calculadora de Proveedores</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #000000 0%, #efb810 100%);
            min-height: 100vh;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background: white;
            border-radius: 25px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .headerr {
            text-align: center;
            margin-bottom: 30px;
        }

        .headerr h1 {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .headerr p {
            color: #7f8c8d;
            font-size: 14px;
        }

        .input-group {
            margin-bottom: 25px;
        }

        .input-label {
            display: block;
            color: #34495e;
            font-weight: bold;
            margin-bottom: 4px;
        }

        .provider-select {
            width: 100%;
            padding: 15px;
            border: 2px solid #e9ecef;
            border-radius: 15px;
            font-size: 16px;
            background: white;
            transition: all 0.3s ease;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=US-ASCII,<svg xmlns='http://www.w3.org/2000/svg' width='4' height='5'><path fill='%23666' d='m0 0 4 0-2 5'/></svg>");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 12px;
        }

        .provider-select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .amount-input {
            width: 100%;
            padding: 15px;
            border: 2px solid #e9ecef;
            border-radius: 15px;
            font-size: 18px;
            text-align: center;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .amount-input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .delivery-input {
            width: 100%;
            padding: 12px;
            border: 2px solid #e3f2fd;
            border-radius: 12px;
            font-size: 16px;
            text-align: center;
            font-weight: 600;
            transition: all 0.3s ease;
            background: #f8fbff;
        }

        .delivery-input:focus {
            outline: none;
            border-color: #2196f3;
            box-shadow: 0 0 0 3px rgba(33, 150, 243, 0.1);
            background: white;
        }

        .currency-toggle {
            display: flex;
            background: #f8f9fa;
            border-radius: 15px;
            padding: 5px;
            margin-bottom: 25px;
        }

        .currency-btn {
            flex: 1;
            padding: 12px;
            border: none;
            background: transparent;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .currency-btn.active {
            background: white;
            color: #667eea;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .results {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 20px;
            padding: 25px;
            margin-top: 25px;
        }

        .result-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding: 12px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .result-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .result-label {
            font-size: 14px;
            color: #6c757d;
            font-weight: 500;
        }

        .result-value {
            font-weight: 700;
            font-size: 16px;
            color: #2c3e50;
        }

        .calculation-breakdown {
            background: #fff3e0;
            border-radius: 12px;
            padding: 15px;
            margin: 15px 0;
            font-size: 13px;
            color: #f57c00;
            border-left: 4px solid #ff9800;
        }

        .delivery-section {
            background: #e8f5e8;
            border-radius: 15px;
            padding: 20px;
            margin: 20px 0;
            border: 2px solid #4caf50;
        }

        .delivery-section .input-label {
            color: #2e7d32;
            margin-bottom: 10px;
        }

        .final-price {
            background: linear-gradient(135deg, #000000 0%, #e0b909 100%);
            color: white;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

        .final-price .label {
            font-size: 14px;
            opacity: 0.9;
            margin-bottom: 5px;
        }

        .final-price .value {
            font-size: 28px;
            font-weight: 700;
        }

        .price-breakdown {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 14px;
        }

        .provider-info {
            background: #e3f2fd;
            border-radius: 12px;
            padding: 15px;
            margin-top: 15px;
            font-size: 12px;
            color: #1976d2;
        }

        .update-time {
            text-align: center;
            color: #95a5a6;
            font-size: 12px;
            margin-top: 20px;
        }

        .currency-indicator {
            display: block;
            text-align: center; /* centra el texto */
            font-size: 0.9rem; /* un poco más pequeño que el label */
            color: #666; /* gris sutil */
            margin-bottom: 8px; /* separación antes del input */
        }

        @media (max-width: 480px) {
            .container {
                margin: 10px;
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <header id="header" class="header d-flex align-items-center position-relative">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/images/pruebaLogo.png') }}" alt="logoCorporacionSuper">
                <!-- <h1 class="sitename">Corporación SUPER</h1> -->
                <!-- <span>.</span> -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}#hero" class="active">Inicio<br></a></li>
                    <li><a href="{{ route('home') }}#about">Nosotros</a></li>
                    <li><a href="{{ route('home') }}#services">Servicios</a></li>
                    <li><a href="{{ route('home') }}#portfolio">Productos</a></li>
                    <li><a href="{{ route('home') }}#videos">Promociones</a></li>
                    <li class="dropdown"><a href="{{ route('home') }}#stores"><span>Cotizar</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ Route('SuperCasanova.index') }}">Super Casanova</a></li>
                            <li class="dropdown"><a href="{{ Route('SuperShaya.index') }}"><span>Super Shaya</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ Route('ServicioTallerSuperShaya.index') }}">Taller de Servicio |
                                            Super Shaya</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{ Route('SuperPanteonUno.index') }}"><span>Super Panteón
                                        1</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ Route('ServicioTallerSuperPanteonUno.index') }}">Taller de Servicio
                                            | Super Panteón 1</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ Route('SuperShai.index') }}">Super Shai</a></li>
                            <li><a href="{{ Route('SuperVictoria.index') }}">Super Victoria</a></li>
                            <li><a href="{{ Route('SuperJunin.index') }}">Super Junín</a></li>
                            <li><a href="{{ Route('SuperPanteonDos.index') }}">Super Panteón 2</a></li>
                            <li><a href="{{ Route('SuperSuspension.index') }}">Super Suspensión</a></li>
                            <li><a href="{{ Route('SuperEstrella.index') }}">Super Estrella</a></li>
                            <li><a href="{{ Route('SuperRepuestos1212.index') }}">Super Repuestos1212</a></li>

                        </ul>
                    </li>
                    <li><a href="{{ route('home') }}#contact">Contacto</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{ route('home') }}#about">¡Enterate!</a>


            <!-- Espacio para incluir el Portal mediante un botón -->
            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Intranet
                        </a>

                        <!-- @if (Route::has('register'))
    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Register
                                    </a>
    @endif -->
                    @endauth
                </nav>
            @endif

        </div>
    </header>

    <br>
    <br>
    <div class="container">
        <div class="headerr">
            <h1>Corporación Super Repuestos</h1>
            <p>Calculadora para Vendedores</p>
        </div>

        <div class="input-group">
            <label class="input-label">Seleccionar Proveedor</label>
            <select class="provider-select" id="providerSelect">
                <option value="">Seleccione un proveedor...</option>
                <option value="proveedor1">Asiamerica</option>
                <option value="proveedor2">Autopartes</option>
                <option value="proveedor3">Bravo Import</option>
                <option value="proveedor4">Chino 1</option>
                <option value="proveedor5">Chino 2</option>
                <option value="proveedor6">Chino 3</option>
                <option value="proveedor7">Comercial 88</option>
                <option value="proveedor8">EDS</option>
                <option value="proveedor9">Excelso</option>
                <option value="proveedor10">Gran Import</option>
                <option value="proveedor11">Italven</option>
                <option value="proveedor12">Jaffensa</option>
                <option value="proveedor13">JD</option>
                <option value="proveedor14">Perfect</option>
                <option value="proveedor15">Rodalven</option>
                <option value="proveedor16">Sendai Motors</option>
                <option value="proveedor17">Suslanzca</option>
                <option value="proveedor18">Trenden</option>
                <option value="proveedor19">TVA Grupo 77</option>
                <option value="proveedor20">Volker</option>
            </select>
        </div>

        <div class="currency-toggle">
            <button class="currency-btn active" id="usdBtn" onclick="setCurrency('USD')">USD ($)</button>
            <button class="currency-btn" id="bsBtn" onclick="setCurrency('BS')">Bolívares (Bs)</button>
        </div>

        <div class="input-group">
            <label class="input-label">Monto Base del Repuesto</label>
            <div class="currency-indicator" id="currencyIndicator">Ingrese el monto en USD ($)</div>
            <input type="number" class="amount-input" id="amountInput" placeholder="0.00" step="0.01"
                min="0">
        </div>

        <div class="delivery-section">
            <label class="input-label">🚚 Monto del Delivery</label>
            <div class="currency-indicator" id="deliveryCurrencyIndicator">Ingrese el delivery en USD ($)</div>
            <input type="number" class="delivery-input" id="deliveryInput" placeholder="0.00" step="0.01"
                min="0">
        </div>

        <div class="results" id="results" style="display: none;">
            <div class="result-item">
                <span class="result-label">Costo Base:</span>
                <span class="result-value" id="baseCost">$0.00</span>
            </div>

            <div class="calculation-breakdown" id="calculationBreakdown">
                Cálculo: Monto base según condiciones del proveedor
            </div>

            <div class="result-item">
                <span class="result-label">Precio Repuesto:</span>
                <span class="result-value" id="partPrice">$0.00</span>
            </div>
            <div class="result-item">
                <span class="result-label">Delivery:</span>
                <span class="result-value" id="deliveryPrice">$0.00</span>
            </div>

            <div class="final-price">
                <div class="label">Precio de Venta Final</div>
                <div class="value" id="finalPrice">$0.00</div>
                <div class="price-breakdown">
                    <span>Repuesto + Delivery</span>
                    <span id="totalBreakdown">$0.00 + $0.00</span>
                </div>
            </div>

            <div class="provider-info" id="providerInfo"></div>
        </div>

        <div class="update-time" id="updateTime"></div>
    </div>

    <script>
        // Configuración de proveedores con condiciones duales USD/BS
        const providerConfig = {
            proveedor1: {
                name: "Asiamerica",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar entre 0.55
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 1.40
                    }
                },
                notes: "Cálculo USD: (Monto - 0%) ÷ 0.55 | Cálculo BS: (Monto + 0%) × 1.40"
            },
            proveedor2: {
                name: "Autopartes",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 35
                        }, // Restar 35%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar por 1.40
                    },
                    BS: {
                        operation1: {
                            type: 'subtract',
                            value: 35
                        }, // Restar 35%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 25%) ÷ 0.60 | Cálculo BS: (Monto + 15%) × 1.35"
            },
            proveedor3: {
                name: "Bravo Import",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.50
                        } // Multiplicar por 1.50
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.50
                        } // Multiplicar por 1.50
                    }
                },
                notes: "Cálculo USD: (Monto - 20%) ÷ 0.65 | Cálculo BS: (Monto + 12%) × 1.45"
            },
            proveedor4: {
                name: "Chino 1",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 36
                        }, // Restar 36%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar por 1.40
                    },
                    BS: {
                        operation1: {
                            type: 'subtract',
                            value: 36
                        }, // Restar 36%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 28%) ÷ 0.58 | Cálculo BS: (Monto + 18%) × 1.38"
            },
            proveedor5: {
                name: "Chino 2",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar por 1.40
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 22%) ÷ 0.62 | Cálculo BS: (Monto + 14%) × 1.42"
            },
            proveedor6: {
                name: "Chino 3",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar por 1.40
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 30%) ÷ 0.55 | Cálculo BS: (Monto + 10%) × 1.40"
            },
            proveedor7: {
                name: "Comercial 88",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar por 1.40
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 26%) ÷ 0.59 | Cálculo BS: (Monto + 16%) × 1.36"
            },
            proveedor8: {
                name: "EDS",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 24%) ÷ 0.61 | Cálculo BS: (Monto + 13%) × 1.43"
            },
            proveedor9: {
                name: "Excelso",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar por 1.40
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 27%) ÷ 0.57 | Cálculo BS: (Monto + 17%) × 1.37"
            },
            proveedor10: {
                name: "Gran Import",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 23%) ÷ 0.63 | Cálculo BS: (Monto + 11%) × 1.44"
            },
            proveedor11: {
                name: "Italven",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.46
                        } // Multiplicar por 1.86
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.86
                        } // Multiplicar por 1.86
                    }
                },
                notes: "Cálculo USD: (Monto - 23%) ÷ 0.63 | Cálculo BS: (Monto + 11%) × 1.44"
            },
            proveedor12: {
                name: "Jaffensa",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 23%) ÷ 0.63 | Cálculo BS: (Monto + 11%) × 1.44"
            },
            proveedor13: {
                name: "JD",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.30
                        } // Multiplicar por 1.30
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar por 1.40
                    }
                },
                notes: "Cálculo USD: (Monto - 23%) ÷ 0.63 | Cálculo BS: (Monto + 11%) × 1.44"
            },
            proveedor14: {
                name: "Perfect",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'divide',
                            value: 0
                        } // Dividir por 0 (sin operación)
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'multiply',
                            value: 0
                        } // Multiplicar por 0 (sin operación)
                    }
                },
                notes: "Cálculo USD: (Monto - 23%) ÷ 0.63 | Cálculo BS: (Monto + 11%) × 1.44"
            },
            proveedor15: {
                name: "Rodalven",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 25
                        }, // Restar 25%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar por 1.40
                    },
                    BS: {
                        operation1: {
                            type: 'subtract',
                            value: 25
                        }, // Restar 25%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 23%) ÷ 0.63 | Cálculo BS: (Monto + 11%) × 1.44"
            },
            proveedor16: {
                name: "Sendai Motors",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar por 1.40
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 23%) ÷ 0.63 | Cálculo BS: (Monto + 11%) × 1.44"
            },
            proveedor17: {
                name: "Suslanzca",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar por 1.40
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 23%) ÷ 0.63 | Cálculo BS: (Monto + 11%) × 1.44"
            },
            proveedor18: {
                name: "Trenden",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar por 1.40
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 23%) ÷ 0.63 | Cálculo BS: (Monto + 11%) × 1.44"
            },
            proveedor19: {
                name: "TVA Grupo 77",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 60
                        }, // Restar 60%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar por 1.40
                    },
                    BS: {
                        operation1: {
                            type: 'subtract',
                            value: 60
                        }, // Restar 60%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 23%) ÷ 0.63 | Cálculo BS: (Monto + 11%) × 1.44"
            },
            proveedor20: {
                name: "Volker",
                exchangeRate: 154.01,
                conditions: {
                    USD: {
                        operation1: {
                            type: 'subtract',
                            value: 0
                        }, // Restar 0%
                        operation2: {
                            type: 'multiply',
                            value: 1.40
                        } // Multiplicar por 1.40
                    },
                    BS: {
                        operation1: {
                            type: 'add',
                            value: 0
                        }, // Sumar 0%
                        operation2: {
                            type: 'divide',
                            value: 0.55
                        } // Dividir por 0.55
                    }
                },
                notes: "Cálculo USD: (Monto - 23%) ÷ 0.63 | Cálculo BS: (Monto + 11%) × 1.44"
            }
        };

        let currentCurrency = 'USD';
        let currentProvider = null;
        let baseAmountUSD = 0;
        let deliveryAmountUSD = 0;

        // Elementos del DOM
        const providerSelect = document.getElementById('providerSelect');
        const amountInput = document.getElementById('amountInput');
        const deliveryInput = document.getElementById('deliveryInput');
        const results = document.getElementById('results');
        const baseCost = document.getElementById('baseCost');
        const partPrice = document.getElementById('partPrice');
        const deliveryPrice = document.getElementById('deliveryPrice');
        const finalPrice = document.getElementById('finalPrice');
        const totalBreakdown = document.getElementById('totalBreakdown');
        const calculationBreakdown = document.getElementById('calculationBreakdown');
        const providerInfo = document.getElementById('providerInfo');
        const updateTime = document.getElementById('updateTime');
        const currencyIndicator = document.getElementById('currencyIndicator');
        const deliveryCurrencyIndicator = document.getElementById('deliveryCurrencyIndicator');

        // Event listeners
        providerSelect.addEventListener('change', calculatePrice);
        amountInput.addEventListener('input', handleAmountInput);
        deliveryInput.addEventListener('input', handleDeliveryInput);

        function setCurrency(currency) {
            currentCurrency = currency;

            // Actualizar botones
            document.getElementById('usdBtn').classList.toggle('active', currency === 'USD');
            document.getElementById('bsBtn').classList.toggle('active', currency === 'BS');

            // Actualizar indicadores
            if (currency === 'USD') {
                currencyIndicator.textContent = 'Ingrese el monto en USD ($)';
                deliveryCurrencyIndicator.textContent = 'Ingrese el delivery en USD ($)';
                amountInput.placeholder = '0.00';
                deliveryInput.placeholder = '0.00';
            } else {
                currencyIndicator.textContent = 'Ingrese el monto en Bolívares (Bs)';
                deliveryCurrencyIndicator.textContent = 'Ingrese el delivery en Bolívares (Bs)';
                amountInput.placeholder = '0.00';
                deliveryInput.placeholder = '0.00';
            }

            updateDisplayValues();
            calculatePrice();
        }

        function handleAmountInput() {
            const amount = parseFloat(amountInput.value) || 0;

            if (currentCurrency === 'USD') {
                baseAmountUSD = amount;
            } else {
                // Convertir de BS a USD para almacenar
                baseAmountUSD = currentProvider ? amount / currentProvider.exchangeRate : 0;
            }

            calculatePrice();
        }

        function handleDeliveryInput() {
            const delivery = parseFloat(deliveryInput.value) || 0;

            if (currentCurrency === 'USD') {
                deliveryAmountUSD = delivery;
            } else {
                // Convertir de BS a USD para almacenar
                deliveryAmountUSD = currentProvider ? delivery / currentProvider.exchangeRate : 0;
            }

            calculatePrice();
        }

        function updateDisplayValues() {
            if (!currentProvider) return;

            if (currentCurrency === 'USD') {
                amountInput.value = baseAmountUSD > 0 ? baseAmountUSD.toFixed(2) : '';
                deliveryInput.value = deliveryAmountUSD > 0 ? deliveryAmountUSD.toFixed(2) : '';
            } else {
                const baseBS = baseAmountUSD * currentProvider.exchangeRate;
                const deliveryBS = deliveryAmountUSD * currentProvider.exchangeRate;
                amountInput.value = baseAmountUSD > 0 ? baseBS.toFixed(2) : '';
                deliveryInput.value = deliveryAmountUSD > 0 ? deliveryBS.toFixed(2) : '';
            }
        }

        function applyOperation(value, operation) {
            switch (operation.type) {
                case 'add':
                    return value * (1 + operation.value / 100);
                case 'subtract':
                    return value * (1 - operation.value / 100);
                case 'multiply':
                    return value * operation.value;
                case 'divide':
                    return value / operation.value;
                default:
                    return value;
            }
        }

        function getOperationText(operation) {
            switch (operation.type) {
                case 'add':
                    return `+ ${operation.value}%`;
                case 'subtract':
                    return `- ${operation.value}%`;
                case 'multiply':
                    return `× ${operation.value}`;
                case 'divide':
                    return `÷ ${operation.value}`;
                default:
                    return '';
            }
        }

        function calculatePrice() {
            const providerId = providerSelect.value;

            if (!providerId || baseAmountUSD <= 0) {
                results.style.display = 'none';
                return;
            }

            currentProvider = providerConfig[providerId];
            const conditions = currentProvider.conditions[currentCurrency];

            // Aplicar operaciones según la condición del proveedor
            let processedAmount = baseAmountUSD;
            processedAmount = applyOperation(processedAmount, conditions.operation1);
            processedAmount = applyOperation(processedAmount, conditions.operation2);

            // Formatear valores según la moneda actual
            const formatCurrency = (value, showSymbol = true) => {
                if (currentCurrency === 'USD') {
                    return showSymbol ? `$${value.toFixed(2)}` : value.toFixed(2);
                } else {
                    const bsValue = value * currentProvider.exchangeRate;
                    return showSymbol ? `Bs ${bsValue.toFixed(2)}` : bsValue.toFixed(2);
                }
            };

            // Mostrar resultados
            baseCost.textContent = formatCurrency(baseAmountUSD);
            partPrice.textContent = formatCurrency(processedAmount);
            deliveryPrice.textContent = formatCurrency(deliveryAmountUSD);

            const totalPrice = processedAmount + deliveryAmountUSD;
            finalPrice.textContent = formatCurrency(totalPrice);
            totalBreakdown.textContent = `${formatCurrency(processedAmount)} + ${formatCurrency(deliveryAmountUSD)}`;

            // Mostrar breakdown del cálculo
            const op1Text = getOperationText(conditions.operation1);
            const op2Text = getOperationText(conditions.operation2);
            calculationBreakdown.textContent = `Cálculo ${currentCurrency}: Monto base ${op1Text} ${op2Text}`;

            // Información del proveedor
            providerInfo.textContent = currentProvider.notes;

            // Mostrar resultados
            results.style.display = 'block';

            // Actualizar timestamp
            updateTime.textContent =
                `Actualizado: ${new Date().toLocaleString('es-VE')} | Tasa: ${currentProvider.exchangeRate}`;
        }

        // Inicializar
        updateTime.textContent = `Actualizado: ${new Date().toLocaleString('es-VE')}`;

        // Auto-actualización cada 30 segundos
        setInterval(() => {
            if (currentProvider) {
                updateTime.textContent =
                    `Actualizado: ${new Date().toLocaleString('es-VE')} | Tasa: ${currentProvider.exchangeRate}`;
            }
        }, 30000);
    </script>

    <br>
    <br>
    <div class="copyright">
        <div class="container-fluid container-xl text-center">
            <span class="resaltar3">
                <p>© <span>2025 Copyright</span> <strong class="px-1 sitename">Corporación <strong>SUPER</strong>
                        Repuestos</strong><span>All Rights Reserved</span></p>
            </span>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                <span class="resaltar3">Designed by <a
                        href="https://www.instagram.com/gianniantonio_?igsh=OTRrN2kxZ3czY2Zq">Gianni
                        Imperato</a></span>
            </div>
        </div>
    </div>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
