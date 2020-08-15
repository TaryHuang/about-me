using System;
using System.Data.Linq;
using System.ComponentModel;
using System.Data.Linq.Mapping;

namespace BOBO
{
    public class DBHandler : DataContext
    {
        public static string DBConnection = "Data Source=isostore:/XL2.sdf";

        public DBHandler(string pDBConnection) : base(pDBConnection) { }

        public Table<Contacts> Contacts;
        public Table<Contacts2> Contacts2;
    }
}
