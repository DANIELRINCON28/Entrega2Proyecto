using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace UiFinal.CLASES
{
    internal class PELICULA
    {
        private string titulo;
        private string genero;
        private string actor;
        private string director;

        public PELICULA(string titulo, string genero, string actor, string director)
        {
            this.titulo = titulo;
            this.genero = genero;
            this.actor = actor;
            this.director = director;
        }

        public string Titulo { get => titulo; set => titulo = value; }
        public string Genero { get => genero; set => genero = value; }
        public string Actor { get => actor; set => actor = value; }
        public string Director { get => director; set => director = value; }

    }
}
