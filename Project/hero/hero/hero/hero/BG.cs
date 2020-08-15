using System;
using System.Collections.Generic;
using System.Linq;
using System.Windows.Controls;
using Microsoft.Phone.Controls;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;
using Microsoft.Devices.Sensors;

namespace hero
{
    public class BG
    {
        int n = 25;//星星數量
        float v = 0.8f;//星星移動速度
        List<TARY_VIMG> Stars = new List<TARY_VIMG>();
        TARY_RANDOM randObj = GamePage.randObj;
        Texture2D img;

        public BG(Texture2D IMG)
        {
            n += GamePage.HERO_LV;
            v += GamePage.HERO_LV * 0.1f;
            img = IMG;
            for (int i = 0; i < n;i++ )
            {
                Stars.Add(new TARY_VIMG(img, new Vector2(randObj.Next(0, 480), randObj.Next(0, 800))));
                Stars[i].Size = randObj.Next(1, 5);
            }
        }

        public void Draw(SpriteBatch P)
        {
            for (int i = 0; i < Stars.Count; i++)
            {
                Stars[i].draw(P);
            }
        }

        public void update()
        {

            
            for (int i = Stars.Count-1; i >= 0; i--)
            {
                Stars[i].Y += v;
                if (Stars[i].Y >= 810)
                {
                    Stars.RemoveAt(i);//刪除超過作標位置的星星
                }
            }



            for (int i = Stars.Count; i < n;i++ )
            {
                Stars.Add(new TARY_VIMG(img, new Vector2(randObj.Next(0, 480), 0)));
                Stars[i].Size = randObj.Next(1, 5);
            }

        }

    }
}
