using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace UiFinal.CLASES
{
    internal class DEVOLUCION
    {
        private string peliculaD;
        private string fechaD;
        private float numerocintaD;

        public DEVOLUCION(string peliculaD, string fechaD, float numerocintaD)
        {
            this.peliculaD = peliculaD;
            this.fechaD = fechaD;
            this.numerocintaD = numerocintaD;
        }

        public string PeliculaD { get => peliculaD; set => peliculaD = value; }
        public string FechaD { get => fechaD; set => fechaD = value; }
        public float NumerocintaD { get => numerocintaD; set => numerocintaD = value; }
    }
}
