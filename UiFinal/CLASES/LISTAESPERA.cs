using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace UiFinal.CLASES
{
    internal class LISTAESPERA
    {
        private string fechaingreso;
        private string fechasalida;

        public LISTAESPERA(string fechaingreso, string fechasalida)
        {
            this.fechaingreso = fechaingreso;
            this.fechasalida = fechasalida;
        }

        public string Fechaingreso { get => fechaingreso; set => fechaingreso = value; }
        public string Fechasalida { get => fechasalida; set => fechasalida = value; }
    }
}