using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER41_C : MONSTER41
    {

        public MONSTER41_C(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER41_C, loc);
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 61;//擊倒分數
            HP = 22;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 2f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = 50; //前進多少 才開始觸發事件


            Nmin = 180;//發射延遲時間最少
            Nmax = 250;//發射延遲時間最多

            MinY = 0;//飄移最小值
            MaxY = 300;//飄移最大值
        }

    }
}
