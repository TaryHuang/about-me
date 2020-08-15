using System;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Ink;
using System.Windows.Input;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using System.Windows.Shapes;
using TARY_Library;
namespace hero
{
    public class HPBAR
    {
        TARY_VIMG[] HP_BAR;

        int HP;

        public HPBAR(int num, int HPValue)
        {

            setHPtotal(num);//HP量
            hp = HPValue;//血量
        }

        public HPBAR(int num)
        {

            setHPtotal(num);//HP量
            hp = num;//血量
        }


        public void setHPtotal(int num){
            HP_BAR = new TARY_VIMG[num];
            for (int i = 0; i < HP_BAR.Length;i++ )
            {
                if (num<=24)
                {
                    HP_BAR[i] = new TARY_VIMG(new Texture2D[]{GamePage.picLOVE,GamePage.picLOVE2},new Vector2(0,GamePage.picLOVE.Width*i));
                }
                else if (num >= 25 && num <= 34)
                {
                    HP_BAR[i] = new TARY_VIMG(new Texture2D[] { GamePage.picLOVES, GamePage.picLOVES2 }, new Vector2(0, GamePage.picLOVES.Width * i));
                }
                else
                {
                    HP_BAR[i] = new TARY_VIMG(new Texture2D[] { GamePage.picLOVESS, GamePage.picLOVESS2 }, new Vector2(0, GamePage.picLOVESS.Width * i));
                }
    
                HP_BAR[i].stop();
            }

            hp = HP_BAR.Length;
        }
        public void Draw(SpriteBatch P)
        {
            for (int i = 0; i < HP_BAR.Length;i++ )
            {
                HP_BAR[i].draw(P);
            }
            
        }



        public int hp
        {
            get
            {
                return HP;
            }
            set
            {
                HP = value;
                if(HP < 0){
                    HP = 0;
                }

                if (HP > HP_BAR.Length )
                {
                    HP = HP_BAR.Length;
                }
                
                //計算血的顯示 是否扣格
                for (int i = 0; i < HP_BAR.Length;i++ )
                {
                    if ((i+1) <= HP)
                    {
                        HP_BAR[(HP_BAR.Length - 1) - i].imgptr = 0;
                    }
                    else
                    {
                        HP_BAR[(HP_BAR.Length - 1) - i].imgptr = 1;
                    }
                }
            }
        }
    }
}
