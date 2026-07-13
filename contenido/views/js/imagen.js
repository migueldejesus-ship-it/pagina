function mostrarImagen(numimagen) {
    let x = document.getElementById(numimagen);
    if (numimagen === 'imagen1') {
        x.style.display = "block";
        numimagen = 'imagen2';
        x = document.getElementById(numimagen);
        x.style.display = "none";
        numimagen = 'imagen3';
        x = document.getElementById(numimagen);
        x.style.display = "none";
        numimagen = 'imagen4';
        x = document.getElementById(numimagen);
        x.style.display = "none";
        numimagen = 'imagen5';
        x = document.getElementById(numimagen);
        x.style.display = "none";
        numimagen = 'imagen6';
        x = document.getElementById(numimagen);
        x.style.display = "none";
    } else {
        if (numimagen === 'imagen2') {
            x.style.display = "block";
            numimagen = 'imagen1';
            x = document.getElementById(numimagen);
            x.style.display = "none";
            numimagen = 'imagen3';
            x = document.getElementById(numimagen);
            x.style.display = "none";
            numimagen = 'imagen4';
            x = document.getElementById(numimagen);
            x.style.display = "none";
            numimagen = 'imagen5';
            x = document.getElementById(numimagen);
            x.style.display = "none";
            numimagen = 'imagen6';
            x = document.getElementById(numimagen);
            x.style.display = "none";
        } else {
            if (numimagen === 'imagen3') {
                x.style.display = "block";
                numimagen = 'imagen1';
                x = document.getElementById(numimagen);
                x.style.display = "none";
                numimagen = 'imagen2';
                x = document.getElementById(numimagen);
                x.style.display = "none";
                numimagen = 'imagen4';
                x = document.getElementById(numimagen);
                x.style.display = "none";
                numimagen = 'imagen5';
                x = document.getElementById(numimagen);
                x.style.display = "none";
                numimagen = 'imagen6';
                x = document.getElementById(numimagen);
                x.style.display = "none";
            }
            else {
                if (numimagen === 'imagen4') {
                    x.style.display = "block";
                    numimagen = 'imagen1';
                    x = document.getElementById(numimagen);
                    x.style.display = "none";
                    numimagen = 'imagen2';
                    x = document.getElementById(numimagen);
                    x.style.display = "none";
                    numimagen = 'imagen3';
                    x = document.getElementById(numimagen);
                    x.style.display = "none";
                    numimagen = 'imagen5';
                    x = document.getElementById(numimagen);
                    x.style.display = "none";
                    numimagen = 'imagen6';
                    x = document.getElementById(numimagen);
                    x.style.display = "none";
                } else {
                    if (numimagen === 'imagen5') {
                        x.style.display = "block";
                        numimagen = 'imagen1';
                        x = document.getElementById(numimagen);
                        x.style.display = "none";
                        numimagen = 'imagen2';
                        x = document.getElementById(numimagen);
                        x.style.display = "none";
                        numimagen = 'imagen3';
                        x = document.getElementById(numimagen);
                        x.style.display = "none";
                        numimagen = 'imagen4';
                        x = document.getElementById(numimagen);
                        x.style.display = "none";
                        numimagen = 'imagen6';
                        x = document.getElementById(numimagen);
                        x.style.display = "none";
                    } else {
                        if (numimagen === 'imagen6') {
                            x.style.display = "block";
                            numimagen = 'imagen1';
                            x = document.getElementById(numimagen);
                            x.style.display = "none";
                            numimagen = 'imagen2';
                            x = document.getElementById(numimagen);
                            x.style.display = "none";
                            numimagen = 'imagen3';
                            x = document.getElementById(numimagen);
                            x.style.display = "none";
                            numimagen = 'imagen4';
                            x = document.getElementById(numimagen);
                            x.style.display = "none";
                            numimagen = 'imagen5';
                            x = document.getElementById(numimagen);
                            x.style.display = "none";
                        }
                    }
                }

            }
        }
    }

}
