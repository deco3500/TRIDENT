package teamtrident.projectaim_final;


import android.app.Activity;
import android.os.Bundle;
import android.util.DisplayMetrics;
import android.widget.ImageView;
import android.widget.TextView;

public class Pop extends Activity {

    TextView tvT;
    TextView tvD;

    ImageView qr;

    String title;
    String descr;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.pop_win);

        tvT = (TextView)findViewById(R.id.tvTitle);
        tvD = (TextView)findViewById(R.id.tvDescr);

        qr = (ImageView)findViewById(R.id.ivQR);
        qr.setImageResource(R.drawable.qr_code_static);
        qr.getLayoutParams().height = 400;
        qr.getLayoutParams().width = 400;

        Bundle extras = getIntent().getExtras();
        if (extras != null) {
            title = extras.getString("TITLE");
            descr = extras.getString("DESCR");
        }

        tvT.setText(title);
        tvD.setText(descr);

        DisplayMetrics dm = new DisplayMetrics();
        getWindowManager().getDefaultDisplay().getMetrics(dm);

        int width = dm.widthPixels;
        int height = dm.heightPixels;

        getWindow().setLayout((int)(width*.8),(int)(height*.65));
    }
}
