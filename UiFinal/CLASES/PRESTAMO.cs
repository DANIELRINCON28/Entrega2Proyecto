using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace UiFinal.CLASES
{
    internal class PRESTAMO
    {
        private string peliculaP;
        private string fechaP;
        private float numerocintaP;

        public PRESTAMO(string peliculaP, string fechaP, float numerocintaP)
        {
            this.peliculaP = peliculaP;
            this.fechaP = fechaP;
            this.numerocintaP = numerocintaP;
        }

        public string PeliculaP { get => peliculaP; set => peliculaP = value; }
        public string FechaP { get => fechaP; set => fechaP = value; }
        public float NumerocintaP { get => numerocintaP; set => numerocintaP = value; }
    }
}
