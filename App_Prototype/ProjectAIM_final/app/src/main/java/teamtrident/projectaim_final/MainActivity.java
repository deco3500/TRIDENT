package teamtrident.projectaim_final;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    Button btn;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        btn = (Button) findViewById(R.id.buttonLogin);
    }

    public void gotoUser(View v) {
        Intent i = new Intent(MainActivity.this, UserActivity.class);
        startActivity(i);
    }
}
