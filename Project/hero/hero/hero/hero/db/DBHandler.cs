using System;
using System.Data.Linq;
using System.ComponentModel;
using System.Data.Linq.Mapping;

namespace hero
{
    public class DBHandler : DataContext
    {
        public static string DBConnection = "Data Source=isostore:/hero.sdf";

        public DBHandler(string pDBConnection) : base(pDBConnection) { }

        public Table<Contacts> Contacts;
        public Table<Contacts_Score> Contacts_Score;
        //public Table<MENU> MENU;
       // public Table<LV> LV;
       // public Table<BAR> BAR;
    }
}
