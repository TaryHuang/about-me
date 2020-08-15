using System;
using System.Data.Linq;
using System.Data.Linq.Mapping;
using System.ComponentModel;
using System.Collections.ObjectModel;
using System.Data;

namespace BOBO
{
    //實作INotifyPropertyChanged與INotifyPropertyChanging介面，做為屬性(欄位)值變更時的事件觸發。
    [Table(Name="Contacts2")]
    public class Contacts2 : INotifyPropertyChanged, INotifyPropertyChanging
    {
        private int gID;
        [Column(IsPrimaryKey = true, IsDbGenerated = true,
                DbType = "INT NOT NULL Identity", CanBeNull = false, AutoSync = AutoSync.OnInsert)]
        public int ID
        {
            get
            {
                return gID;
            }
            set
            {
                NotifyPropertyChanging("ID");
                gID = value;
                NotifyPropertyChanged("ID");
            }
        }



        //旗標  過關記錄其標為1   其他為0
        private int gT;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "T")]
        public int T
        {
            get
            {
                return gT;
            }
            set
            {
                NotifyPropertyChanging("T");
                gT = value;
                NotifyPropertyChanging("T");
            }
        }




        //關卡
        private int gLVNO;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "LVNO")]
        public int LVNO
        {
            get
            {
                return gLVNO;
            }
            set
            {
                NotifyPropertyChanging("LVNO");
                gLVNO = value;
                NotifyPropertyChanging("LVNO");
            }
        }



        //破關時間
        private int gTimer;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "Timer")]
        public int Timer
        {
            get
            {
                return gTimer;
            }
            set
            {
                NotifyPropertyChanging("Timer");
                gTimer = value;
                NotifyPropertyChanging("Timer");
            }
        }



        #region INotifyPropertyChanging觸發事件
        public event PropertyChangingEventHandler PropertyChanging;

        private void NotifyPropertyChanging(string pPropertyName){
            if (PropertyChanging!=null){
                PropertyChanging(this, new PropertyChangingEventArgs(pPropertyName));
            }
        }
        #endregion

        #region INotifyPropertyChanged觸發事件
        public event PropertyChangedEventHandler PropertyChanged;

        private void NotifyPropertyChanged(string pPropertyName)
        {
            if (PropertyChanged != null)
            {
                PropertyChanged(this, new PropertyChangedEventArgs(pPropertyName));
            }
        }
        #endregion
    }
}
