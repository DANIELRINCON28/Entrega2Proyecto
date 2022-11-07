using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace UiFinal.CLASES
{
    internal class SOCIO
    {
        private string carnet;
        private string nombre;
        private string direccion;
        private string telefono;

        public SOCIO(string carnet, string nombre, string direccion, string telefono)
        {
            this.carnet = carnet;
            this.nombre = nombre;
            this.direccion = direccion;
            this.telefono = telefono;
        }

        public string Carnet { get => carnet; set => carnet = value; }
        public string Nombre { get => nombre; set => nombre = value; }
        public string Direccion { get => direccion; set => direccion = value; }
        public string Telefono { get => telefono; set => telefono = value; }
    }
}
