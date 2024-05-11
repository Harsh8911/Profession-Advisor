<!DOCTYPE html>
<html>

<head>
    <title>Card Grid</title>
    <link rel="stylesheet" type="text/css" href="css/know.css">
  <!--	Css Link-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
     
<script>
            (function(w, d, s, o, f, js, fjs) {
                w["botsonic_widget"] = o;
                w[o] =
                    w[o] ||
                    function() {
                        (w[o].q = w[o].q || []).push(arguments);
                    };
                (js = d.createElement(s)), (fjs = d.getElementsByTagName(s)[0]);
                js.id = o;
                js.src = f;
                js.async = 1;
                fjs.parentNode.insertBefore(js, fjs);
            })(window, document, "script", "Botsonic", "https://widget.writesonic.com/CDN/botsonic.min.js");
            Botsonic("init", {
                serviceBaseUrl: "https://api-azure.botsonic.ai",
                token: "7df3ea59-bd1d-406d-a085-4bf5ad3b32ae",
            });
        </script>
        <br>
        <br>
    <div class="dropdown">
        <center><label for="filter">Filter:</label>
        <select id="filter">
            <option value="all">All</option>
            <option value="diploma">Diploma</option>
            <option value="engineering">Engineering</option>
            <option value="pharmacy">Pharmacy</option>
            <option value="law">Law</option>
            <option value="doctor">Doctor</option>
            <option value="iti">ITI</option>
        </select>
        </center>
    </div>

    <div class="card-grid">
        <!-- Filtered cards will be displayed here -->
    </div>

    <script>
        const filter = document.getElementById('filter');
        const cardGrid = document.querySelector('.card-grid');

        filter.addEventListener('change', function() {
            const selectedValue = this.value;
            cardGrid.innerHTML = ''; // Clear existing cards

            // Define card data with external links
            const cardData = {
                diploma: [{
                        title: 'Computer',
                        items: [{
                                name: 'Web developer',
                                link: 'roadmap/diploma/webdevloper.php'
                            },
                            {
                                name: 'Programmer',
                                link: 'roadmap/diploma/programmer.php'
                            },
                            {
                                name: 'Network Anaylst',
                                link: 'roadmap/diploma/Network.php'
                            }
                        ]
                    },
                    {
                        title: 'Mechanical',
                        items: [{
                                name: 'Assistant Engineer',
                                link: 'roadmap/diploma/assistant.php'
                            },
                            {
                                name: 'Pump Industry',
                                link: 'https://example.com/diploma/mechanical/pump-industry'
                            },
                            {
                                name: 'CNC Traning',
                                link: 'https://example.com/diploma/mechanical/cnc-traning'
                            },
                            {
                                name: 'Mechanical Engineer',
                                link: 'https://example.com/diploma/mechanical/mechanical-engineer'
                            }
                        ]
                    },
                    {
                        title: 'Civil',
                        items: [{
                                name: 'civil engineer',
                                link: 'roadmap/diploma/civil.php'
                            },
                            {
                                name: 'Surveying',
                                link: 'https://example.com/diploma/civil/surveying'
                            },
                            {
                                name: 'Construction Engineer',
                                link: 'https://example.com/diploma/civil/construction-engineer'
                            },
                            {
                                name: 'DRDO',
                                link: 'https://example.com/diploma/civil/drdo'
                            }
                        ]
                    },
                    {
                        title: 'Electrical',
                        items: [{
                                name: 'Electrical technician',
                                link: 'roadmap/diploma/electrical.php'
                            },
                            {
                                name: 'electronics engineer',
                                link: 'https://example.com/diploma/electrical/electronics-engineer'
                            },
                            {
                                name: 'project engineer',
                                link: 'https://example.com/diploma/electrical/project-engineer'
                            },
                            {
                                name: 'control system engineer',
                                link: 'https://example.com/diploma/electrical/control-system-engineer'
                            },
                            {
                                name: 'electrical design engineer',
                                link: 'https://example.com/diploma/electrical/electrical-design-engineer'
                            }
                        ]
                    }
                ],
                engineering: [{
                        title: 'Computer',
                        items: [{
                                name: 'Data Analyst',
                                link: 'roadmap/engineering/dataanalyst.php'
                            },
                            {
                                name: 'Full Stack Developer',
                                link: 'roadmap/engineering/fullstack.php'
                            },
                            {
                                name: 'AI Engineer',
                                link: 'https://example.com/engineering/computer/ai-engineer'
                            },
                            {
                                name: 'Software Developer',
                                link: 'https://example.com/engineering/computer/software-developer'
                            },
                            {
                                name: 'Machine Learning Engineer',
                                link: 'https://example.com/engineering/computer/machine-learning-engineer'
                            }
                        ]
                    },
                    {
                        title: 'Mechanical',
                        items: [{
                                name: 'Aerospace engineer',
                                link: 'roadmap/engineering/aerospace.php'
                            },
                            {
                                name: 'Automotive engineer',
                                link: 'https://example.com/engineering/mechanical/automotive-engineer'
                            },
                            {
                                name: 'Mechanical engineer',
                                link: 'https://example.com/engineering/mechanical/mechanical-engineer'
                            },
                            {
                                name: 'Maintenance engineer',
                                link: 'https://example.com/engineering/mechanical/maintenance-engineer'
                            },
                            {
                                name: 'Mining Engineer',
                                link: 'https://example.com/engineering/mechanical/mining-engineer'
                            }
                        ]
                    },
                    {
                        title: 'Civil',
                        items: [{
                                name: 'Design engineer',
                                link: 'roadmap/engineering/designengineer.php'
                            },
                            {
                                name: 'CAD technician',
                                link: 'https://example.com/engineering/civil/cad-technician'
                            },
                            {
                                name: 'civil engineer',
                                link: 'https://example.com/engineering/civil/civil-engineer'
                            },
                            {
                                name: 'Estimator',
                                link: 'https://example.com/engineering/civil/estimator'
                            },
                            {
                                name: 'Nuclear engineer',
                                link: 'https://example.com/engineering/civil/nuclear-engineer'
                            }
                        ]
                    },
                    {
                        title: 'Electrical',
                        items: [{
                                name: 'Power Engineer',
                                link: 'roadmap/engineering/powerengineer.php'
                            },
                            {
                                name: 'Robotics Engineer',
                                link: 'https://example.com/engineering/electrical/robotics-engineer'
                            },
                            {
                                name: 'Electronics Engineer',
                                link: 'https://example.com/engineering/electrical/electronics-engineer'
                            },
                            {
                                name: 'Electrical Engineer',
                                link: 'https://example.com/engineering/electrical/electrical-engineer'
                            },
                            {
                                name: 'Electrical Design Engineer',
                                link: 'https://example.com/engineering/electrical/electrical-design-engineer'
                            }
                        ]
                    },
                    {
                        title: 'EnTC',
                        items: [{
                                name: 'Telecom Engineer',
                                link: 'roadmap/engineering/telecomm.php'
                            },
                            {
                                name: 'R&D Software Engineer',
                                link: 'https://example.com/engineering/entc/rd-software-engineer'
                            },
                            {
                                name: 'Software Analyst',
                                link: 'https://example.com/engineering/entc/software-analyst'
                            },
                            {
                                name: 'Electronic Design Engineer',
                                link: 'https://example.com/engineering/entc/electronic-design-engineer'
                            },
                            {
                                name: 'Technical Director',
                                link: 'https://example.com/engineering/entc/technical-director'
                            }
                        ]
                    },
                    {
                        title: 'Chemical',
                        items: [{
                                name: 'Energy Engineer',
                                link: 'roadmap/engineering/energyengineer.php'
                            },
                            {
                                name: 'Environmental Engineer',
                                link: 'https://example.com/engineering/chemical/energy-engineer'
                            },
                            {
                                name: 'Product Development Engineer',
                                link: 'https://example.com/engineering/chemical/product-development-engineer'
                            },
                            {
                                name: 'Chemical Plant Manager',
                                link: 'https://example.com/engineering/chemical/chemical-plant-manager'
                            }
                        ]
                    }
                ],
                pharmacy: [{
                        title: 'Pharmaceutics',
                        items: [{
                                name: 'biomedical engineer',
                                link: 'roadmap/pharmacy/biomedical.php'
                            },
                            {
                                name: 'microbiologist',
                                link: 'https://example.com/pharmacy/pharmaceutics/microbiologist'
                            },
                            {
                                name: 'product development scientist',
                                link: 'https://example.com/pharmacy/pharmaceutics/product-development-scientist'
                            },
                            {
                                name: 'senior scientist',
                                link: 'https://example.com/pharmacy/pharmaceutics/senior-scientist'
                            }
                        ]
                    },
                    {
                        title: 'Medicinal Chemistry',
                        items: [{
                                name: 'biomedical engineer',
                                link: 'roadmap/pharmacy/biomedical.php'
                            },
                            {
                                name: 'microbiologist',
                                link: 'https://example.com/pharmacy/pharmaceutics/microbiologist'
                            },
                            {
                                name: 'product development scientist',
                                link: 'https://example.com/pharmacy/pharmaceutics/product-development-scientist'
                            },
                            {
                                name: 'senior scientist',
                                link: 'https://example.com/pharmacy/pharmaceutics/senior-scientist'
                            }
                        ]
                    },
                    {
                        title: 'Pharmacognosy',
                        items: [{
                                name: 'biomedical engineer',
                                link: 'roadmap/pharmacy/biomedical.php'
                            },
                            {
                                name: 'microbiologist',
                                link: 'https://example.com/pharmacy/pharmaceutics/microbiologist'
                            },
                            {
                                name: 'product development scientist',
                                link: 'https://example.com/pharmacy/pharmaceutics/product-development-scientist'
                            },
                            {
                                name: 'senior scientist',
                                link: 'https://example.com/pharmacy/pharmaceutics/senior-scientist'
                            }
                        ]
                    },
                    {
                        title: 'Pharmacology',
                        items: [{
                                name: 'biomedical engineer',
                                link: 'roadmap/pharmacy/biomedical.php'
                            },
                            {
                                name: 'microbiologist',
                                link: 'https://example.com/pharmacy/pharmaceutics/microbiologist'
                            },
                            {
                                name: 'product development scientist',
                                link: 'https://example.com/pharmacy/pharmaceutics/product-development-scientist'
                            },
                            {
                                name: 'senior scientist',
                                link: 'https://example.com/pharmacy/pharmaceutics/senior-scientist'
                            }
                        ]
                    }

                ],
                law: [{
                    title: 'Law',
                    items: [{
                            name: 'Cyber lawyer',
                            link: 'roadmap/law/cyberlaw.php'
                        },
                        {
                            name: 'Criminal Lawyer',
                            link: 'https://example.com/law/criminal-lawyer'
                        },
                        {
                            name: 'Family Lawyer',
                            link: 'https://example.com/law/family-lawyer'
                        },
                        {
                            name: 'Tax lawyer',
                            link: 'https://example.com/law/tax-lawyer'
                        }
                    ]
                }],
                doctor: [{
                    title: 'MBBS',
                    items: [{
                        name: 'Health Informatics and Analytics',
                            link: 'roadmap/doctor/healthinfo.php'
                        },
                        {
                            name: 'Hospital Administration',
                            link: 'https://example.com/doctor/mbbs/hospital-administration'
                        },
                        {
                            name: 'Medical-Legal Advisors',
                            link: 'https://example.com/doctor/mbbs/medical-legal-advisors'
                        }
                    ]
                }],
                iti: [{
                        title: 'Auto Electrician',
                        items: [{
                            name: 'Electrician',
                            link: 'roadmap/iti/electrician.php'
                        }]
                    },
                    {
                        title: 'Auto CAD Technic',
                        items: [{
                                name: 'CAD Expert',
                                link: 'roadmap/iti/cadexert.php'
                            },
                            {
                                name: 'Visualizer 3D',
                                link: 'https://example.com/iti/auto-cad-technic/visualizer-3d'
                            },
                            {
                                name: 'Design Engineer',
                                link: 'https://example.com/iti/auto-cad-technic/design-engineer'
                            }
                        ]
                    },
                    {
                        title: 'Agriculture Engineering',
                        items: [{
                                name: 'Plant Supervisor',
                                link: 'roadmap/iti/modernagri.php'
                            },
                            {
                                name: 'Agriculture Sales',
                                link: 'https://example.com/iti/agriculture-engineering/agriculture-sales'
                            },
                            {
                                name: 'Bio Energy Solutions',
                                link: 'https://example.com/iti/agriculture-engineering/bio-energy-solutions'
                            }
                        ]
                    }
                ]
            };

            // Filter and display cards
            if (selectedValue === 'all') {
                Object.values(cardData).forEach(cards => {
                    cards.forEach(card => {
                        createCard(card.title, card.items);
                    });
                });
            } else {
                cardData[selectedValue].forEach(card => {
                    createCard(card.title, card.items);
                });
            }
        });

        function createCard(title, items) {
            const card = document.createElement('div');
            card.classList.add('card');

            const h3 = document.createElement('h3');
            h3.textContent = title;
            card.appendChild(h3);

            const ul = document.createElement('ul');
            items.forEach(item => {
                const li = document.createElement('li');
                const a = document.createElement('a');
                a.href = item.link;
                a.target = '_blank';
                a.textContent = item.name;
                li.appendChild(a);
                ul.appendChild(li);
            });
            card.appendChild(ul);

            cardGrid.appendChild(card);
        }
    </script>
</body>

</html>