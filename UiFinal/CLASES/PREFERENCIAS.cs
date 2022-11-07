using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace UiFinal.CLASES
{
    internal class PREFERENCIAS
    {
        private string directorfav;
        private string actoresfav;
        private string generosfav;

        public PREFERENCIAS(string directorfav, string actoresfav, string generosfav)
        {
            this.directorfav = directorfav;
            this.actoresfav = actoresfav;
            this.generosfav = generosfav;
        }

        public string Directorfav { get => directorfav; set => directorfav = value; }
        public string Actoresfav { get => actoresfav; set => actoresfav = value; }
        public string Generosfav { get => generosfav; set => generosfav = value; }
    }
}
