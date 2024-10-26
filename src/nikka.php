<!DOCTYPE html>
<html>
<head>
	<title>Hi Nikka</title>
	<style type="text/css">
body, html {
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
    background-image: url('/img/shittyBG.jpg?v2');
    color: white;
}

.wrapper {
    width:100%;
    text-align:center;
    height: 18em;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
}

input {
    border-radius: 0.3em;
    border: 0;
    padding: 0.5em;
    font-size: 1em;
    box-shadow: #848484 4px 5px 0;
    width: 50%;
    outline: 0 !important;
}


span {
    margin-bottom: 2em;
    display: inline-block;
    font-size: 1.4em;
    text-shadow: #949494 5px 5px 14px;
}

h1,p {text-shadow: black 0px 0px 0.1em;}

h1 {
    font-size: 4em;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

p {
    margin: 0.1em;
    line-height:1.6em;
    font-size: 1.5em;
    font-family: serif;
}
p.alt {
	font-style: italic;
	font-size: 1em;
	color: #a0a0a0;
}
p.quote:before {content: '"'}
p.quote:after {content: '"'}
p.quote {
    font-style: italic;
    font-size: 1.25em;
    line-height: 1;
}

.rainbow {
  
   /* Font options */
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  
   /* Chrome, Safari, Opera */
  -webkit-animation: rainbow 3s infinite; 
  
  /* Internet Explorer */
  -ms-animation: rainbow 3s infinite;
  
  /* Standar Syntax */
  animation: rainbow 3s infinite; 
}

/* Chrome, Safari, Opera */
@-webkit-keyframes rainbow{
  0%{color: orange;}    
  10%{color: purple;}   
    20%{color: red;}
    40%{color: yellow;}
    60%{color: green;}
    100%{color: blue;}
    100%{color: orange;}    
}

/* Internet Explorer */
@-ms-keyframes rainbow{
  0%{color: orange;}    
  10%{color: purple;}   
    20%{color: red;}
    40%{color: yellow;}
    60%{color: green;}
    100%{color: blue;}
    100%{color: orange;}    
}

/* Standar Syntax */
@keyframes rainbow{
  0%{color: orange;}    
  10%{color: purple;}   
    20%{color: red;}
    40%{color: yellow;}
    60%{color: green;}
    100%{color: blue;}
    100%{color: orange;}
}


	</style>
    <script src="/js/jquery.min.js"></script>
</head>
<body>
	<div class="wrapper">
        <span class="rainbow"></span><br>
        <input type="text" name="" placeholder="Hi Nikka" value="Hentai">
        <br>
        <img src="#">
	</div>
    <script type="text/javascript">
        mappingTableShort = JSON.parse(`
[       
    {
        "number": 5,
        "shortname": "B",
        "longname": "Boron"
    },

    {
        "number": 6,
        "shortname": "C",
        "longname": "Carbon"
    },

    {
        "number": 9,
        "shortname": "F",
        "longname": "Fluorine"
    },

    {
        "number": 1,
        "shortname": "H",
        "longname": "Hydrogen"
    },

    {
        "number": 53,
        "shortname": "I",
        "longname": "Iodine"
    },

    {
        "number": 7,
        "shortname": "N",
        "longname": "Nitrogen"
    },

    {
        "number": 8,
        "shortname": "O",
        "longname": "Oxygen"
    },

    {
        "number": 15,
        "shortname": "P",
        "longname": "Phosphorus"
    },

    {
        "number": 19,
        "shortname": "K",
        "longname": "Potassium"
    },

    {
        "number": 16,
        "shortname": "S",
        "longname": "Sulfur"
    },

    {
        "number": 74,
        "shortname": "W",
        "longname": "Tungsten"
    },

    {
        "number": 92,
        "shortname": "U",
        "longname": "Uranium"
    },

    {
        "number": 23,
        "shortname": "V",
        "longname": "Vanadium"
    },

    {
        "number": 39,
        "shortname": "Y",
        "longname": "Yttrium"
    }
]`);
        mappingTableLong = JSON.parse(`
[
    {
        "number": 89,
        "shortname": "Ac",
        "longname": "Actinium"
    },
    {
        "number": 13,
        "shortname": "Al",
        "longname": "Aluminium"
    },
    {
        "number": 95,
        "shortname": "Am",
        "longname": "Americium"
    },
    {
        "number": 51,
        "shortname": "Sb",
        "longname": "Antimony"
    },
    {
        "number": 18,
        "shortname": "Ar",
        "longname": "Argon"
    },
    {
        "number": 33,
        "shortname": "As",
        "longname": "Arsenic"
    },
    {
        "number": 85,
        "shortname": "At",
        "longname": "Astatine"
    },
    {
        "number": 56,
        "shortname": "Ba",
        "longname": "Barium"
    },
    {
        "number": 97,
        "shortname": "Bk",
        "longname": "Berkelium"
    },
    {
        "number": 4,
        "shortname": "Be",
        "longname": "Beryllium"
    },
    {
        "number": 83,
        "shortname": "Bi",
        "longname": "Bismuth"
    },
    {
        "number": 107,
        "shortname": "Bh",
        "longname": "Bohrium"
    },
    {
        "number": 35,
        "shortname": "Br",
        "longname": "Bromine"
    },
    {
        "number": 48,
        "shortname": "Cd",
        "longname": "Cadmium"
    },
    {
        "number": 55,
        "shortname": "Cs",
        "longname": "Caesium"
    },
    {
        "number": 20,
        "shortname": "Ca",
        "longname": "Calcium"
    },
    {
        "number": 98,
        "shortname": "Cf",
        "longname": "Californium"
    },
    {
        "number": 58,
        "shortname": "Ce",
        "longname": "Cerium"
    },
    {
        "number": 17,
        "shortname": "Cl",
        "longname": "Chlorine"
    },
    {
        "number": 24,
        "shortname": "Cr",
        "longname": "Chromium"
    },
    {
        "number": 27,
        "shortname": "Co",
        "longname": "Cobalt"
    },
    {
        "number": 112,
        "shortname": "Cn",
        "longname": "Copernicium"
    },
    {
        "number": 29,
        "shortname": "Cu",
        "longname": "Copper"
    },
    {
        "number": 96,
        "shortname": "Cm",
        "longname": "Curium"
    },
    {
        "number": 110,
        "shortname": "Ds",
        "longname": "Darmstadtium"
    },
    {
        "number": 105,
        "shortname": "Db",
        "longname": "Dubnium"
    },
    {
        "number": 66,
        "shortname": "Dy",
        "longname": "Dysprosium"
    },
    {
        "number": 99,
        "shortname": "Es",
        "longname": "Einsteinium"
    },
    {
        "number": 68,
        "shortname": "Er",
        "longname": "Erbium"
    },
    {
        "number": 63,
        "shortname": "Eu",
        "longname": "Europium"
    },
    {
        "number": 100,
        "shortname": "Fm",
        "longname": "Fermium"
    },
    {
        "number": 114,
        "shortname": "Fl",
        "longname": "Flerovium"
    },
    {
        "number": 87,
        "shortname": "Fr",
        "longname": "Francium"
    },
    {
        "number": 64,
        "shortname": "Gd",
        "longname": "Gadolinium"
    },
    {
        "number": 31,
        "shortname": "Ga",
        "longname": "Gallium"
    },
    {
        "number": 32,
        "shortname": "Ge",
        "longname": "Germanium"
    },
    {
        "number": 79,
        "shortname": "Au",
        "longname": "Gold"
    },
    {
        "number": 72,
        "shortname": "Hf",
        "longname": "Hafnium"
    },
    {
        "number": 108,
        "shortname": "Hs",
        "longname": "Hassium"
    },
    {
        "number": 2,
        "shortname": "He",
        "longname": "Helium"
    },
    {
        "number": 67,
        "shortname": "Ho",
        "longname": "Holmium"
    },
    {
        "number": 49,
        "shortname": "In",
        "longname": "Indium"
    },
    {
        "number": 77,
        "shortname": "Ir",
        "longname": "Iridium"
    },
    {
        "number": 26,
        "shortname": "Fe",
        "longname": "Iron"
    },
    {
        "number": 36,
        "shortname": "Kr",
        "longname": "Krypton"
    },
    {
        "number": 57,
        "shortname": "La",
        "longname": "Lanthanum"
    },
    {
        "number": 103,
        "shortname": "Lr",
        "longname": "Lawrencium"
    },
    {
        "number": 82,
        "shortname": "Pb",
        "longname": "Lead"
    },
    {
        "number": 3,
        "shortname": "Li",
        "longname": "Lithium"
    },
    {
        "number": 116,
        "shortname": "Lv",
        "longname": "Livermorium"
    },
    {
        "number": 71,
        "shortname": "Lu",
        "longname": "Lutetium"
    },
    {
        "number": 12,
        "shortname": "Mg",
        "longname": "Magnesium"
    },
    {
        "number": 25,
        "shortname": "Mn",
        "longname": "Manganese"
    },
    {
        "number": 109,
        "shortname": "Mt",
        "longname": "Meitnerium"
    },
    {
        "number": 101,
        "shortname": "Md",
        "longname": "Mendelevium"
    },
    {
        "number": 80,
        "shortname": "Hg",
        "longname": "Mercury"
    },
    {
        "number": 42,
        "shortname": "Mo",
        "longname": "Molybdenum"
    },
    {
        "number": 115,
        "shortname": "Mc",
        "longname": "Moscovium"
    },
    {
        "number": 60,
        "shortname": "Nd",
        "longname": "Neodymium"
    },
    {
        "number": 10,
        "shortname": "Ne",
        "longname": "Neon"
    },
    {
        "number": 93,
        "shortname": "Np",
        "longname": "Neptunium"
    },
    {
        "number": 28,
        "shortname": "Ni",
        "longname": "Nickel"
    },
    {
        "number": 113,
        "shortname": "Nh",
        "longname": "Nihonium"
    },
    {
        "number": 41,
        "shortname": "Nb",
        "longname": "Niobium"
    },
    {
        "number": 102,
        "shortname": "No",
        "longname": "Nobelium"
    },
    {
        "number": 118,
        "shortname": "Og",
        "longname": "Oganesson"
    },
    {
        "number": 76,
        "shortname": "Os",
        "longname": "Osmium"
    },
    {
        "number": 46,
        "shortname": "Pd",
        "longname": "Palladium"
    },
    {
        "number": 78,
        "shortname": "Pt",
        "longname": "Platinum"
    },
    {
        "number": 94,
        "shortname": "Pu",
        "longname": "Plutonium"
    },
    {
        "number": 84,
        "shortname": "Po",
        "longname": "Polonium"
    },
    {
        "number": 59,
        "shortname": "Pr",
        "longname": "Praseodymium"
    },
    {
        "number": 61,
        "shortname": "Pm",
        "longname": "Promethium"
    },
    {
        "number": 91,
        "shortname": "Pa",
        "longname": "Protactinium"
    },
    {
        "number": 88,
        "shortname": "Ra",
        "longname": "Radium"
    },
    {
        "number": 86,
        "shortname": "Rn",
        "longname": "Radon"
    },
    {
        "number": 75,
        "shortname": "Re",
        "longname": "Rhenium"
    },
    {
        "number": 45,
        "shortname": "Rh",
        "longname": "Rhodium"
    },
    {
        "number": 111,
        "shortname": "Rg",
        "longname": "Roentgenium"
    },
    {
        "number": 37,
        "shortname": "Rb",
        "longname": "Rubidium"
    },
    {
        "number": 44,
        "shortname": "Ru",
        "longname": "Ruthenium"
    },
    {
        "number": 104,
        "shortname": "Rf",
        "longname": "Rutherfordium"
    },
    {
        "number": 62,
        "shortname": "Sm",
        "longname": "Samarium"
    },
    {
        "number": 21,
        "shortname": "Sc",
        "longname": "Scandium"
    },
    {
        "number": 106,
        "shortname": "Sg",
        "longname": "Seaborgium"
    },
    {
        "number": 34,
        "shortname": "Se",
        "longname": "Selenium"
    },
    {
        "number": 14,
        "shortname": "Si",
        "longname": "Silicon"
    },
    {
        "number": 47,
        "shortname": "Ag",
        "longname": "Silver"
    },
    {
        "number": 11,
        "shortname": "Na",
        "longname": "Sodium"
    },
    {
        "number": 38,
        "shortname": "Sr",
        "longname": "Strontium"
    },
    {
        "number": 73,
        "shortname": "Ta",
        "longname": "Tantalum"
    },
    {
        "number": 43,
        "shortname": "Tc",
        "longname": "Technetium"
    },
    {
        "number": 52,
        "shortname": "Te",
        "longname": "Tellurium"
    },
    {
        "number": 117,
        "shortname": "Ts",
        "longname": "Tennessine"
    },
    {
        "number": 65,
        "shortname": "Tb",
        "longname": "Terbium"
    },
    {
        "number": 81,
        "shortname": "Tl",
        "longname": "Thallium"
    },
    {
        "number": 90,
        "shortname": "Th",
        "longname": "Thorium"
    },
    {
        "number": 69,
        "shortname": "Tm",
        "longname": "Thulium"
    },
    {
        "number": 50,
        "shortname": "Sn",
        "longname": "Tin"
    },
    {
        "number": 22,
        "shortname": "Ti",
        "longname": "Titanium"
    },
    {
        "number": 54,
        "shortname": "Xe",
        "longname": "Xenon"
    },
    {
        "number": 70,
        "shortname": "Yb",
        "longname": "Ytterbium"
    },
    {
        "number": 30,
        "shortname": "Zn",
        "longname": "Zinc"
    },
    {
        "number": 40,
        "shortname": "Zr",
        "longname": "Zirconium"
    }
]
`);
    function FindTwoLetterSymbol(str) {
        str = str.toLowerCase();
        for (var i = 0; i < mappingTableLong.length; i++) {
            if(mappingTableLong[i].shortname.toLowerCase() == str) {
                return mappingTableLong[i].longname;
            }
        }
        return "ERROR";
    }    
    function FindOneLetterSymbol(str) {
        str = str.toLowerCase();
        for (var i = 0; i < mappingTableShort.length; i++) {
            if(mappingTableShort[i].shortname.toLowerCase() == str) {
                return mappingTableShort[i].longname;
            }
        }
        return "ERROR";
    }

    function ToSymbolString(str) {
        if(str.length == 0) return {success: true, result: ""};
        var twoSym = FindTwoLetterSymbol(str.substr(0,2));
        var oneSym = FindOneLetterSymbol(str.substr(0,1));
        if(twoSym != "ERROR") {
            var res = ToSymbolString(str.substr(2));
            if(res.success)
                return {success: true, result: twoSym + " " + res.result};
        }
        if(oneSym != "ERROR") {
            var res = ToSymbolString(str.substr(1));
            if(res.success)
                return {success: true, result: oneSym + " " + res.result};
        }
        return {success: false, result: ""};
    }

    $('input').on('input', function() {
        var instr = $(this).val().toLowerCase();
        var outstr = "";

        instr = instr.replace(/[^A-Za-z]/g, "");

        var res = ToSymbolString(instr);
        if(res.success)
            outstr = res.result;
        else
            outstr = "it failed... sorry";

        $('span').html(outstr);
        console.log(outstr);
    });

    $('input').focus();
    $('input').trigger('input');
    setInterval(function() {$('input').focus();}, 1000);

     //This is where it will go!
      var imgSrc;
      $.ajax ({
        url: "//api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&tag=dog",
        type: "GET",
        success: function(response) {
          // console.log(response);
          imgSrc = response.data.image_url;
          $("img").attr("src", imgSrc);
        }, 
        error: function(e) {
          console.log("uh oh");
          }
        });


    </script>
</body>
</html>